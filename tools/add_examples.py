#!/usr/bin/env python3
from pathlib import Path
import re

repo = Path(__file__).resolve().parents[1]
rewritten = repo / 'llm' / 'claude-input-rewritten.md'
src = repo / 'src'

text = rewritten.read_text(encoding='utf-8')

# Extract categories and pattern entries
lines = text.splitlines()
current_cat = None
patterns = []
for line in lines:
    m = re.match(r'^##\s+\d+\.\s+(.+)$', line)
    if m:
        current_cat = m.group(1).strip()
        continue
    m2 = re.match(r'^###\s+(.*?)\s+\(`([^`]+)`\)', line)
    if m2:
        name = m2.group(1).strip()
        slug = m2.group(2).strip()
        patterns.append((current_cat, name, slug))


def problems_for(category, name, slug=None):
    # Manual per-pattern problems supplied by the user (strings). Fall back to category heuristics.
    manual_problems = {
        'bayesian-inference': [
            "Choosing an inappropriate or overly informative prior that skews results",
            "Posterior distributions with no closed form, requiring approximation",
            "Computational cost blowing up as the number of parameters grows",
            "Difficulty explaining prior/posterior tradeoffs to non-technical stakeholders",
            "Model misspecification silently producing confidently wrong posteriors"
        ],
        'markov-chain': [
            "Violated Markov (memoryless) assumption when real dependencies span multiple past states",
            "State space explosion making the transition matrix intractable",
            "Estimating transition probabilities reliably from sparse data",
            "Determining an appropriate order for the chain"
        ],
        'hidden-markov-model': [
            "Choosing the right number of hidden states without overfitting",
            "Local optima during Baum-Welch/EM training",
            "Slow inference (Viterbi/forward-backward) on long sequences",
            "Poor performance when observations don't fit the emission distribution assumed",
            "Label/state interpretability once the model is trained"
        ],
        'markov-decision-process': [
            "Defining a reward function that doesn't produce unintended behavior (reward hacking)",
            "Curse of dimensionality in large state/action spaces",
            "Uncertainty or inaccuracy in the transition model",
            "Balancing discount factor choice against convergence and myopia",
            "Difficulty validating the policy before deployment in a real environment"
        ],
        'monte-carlo-method': [
            "Slow convergence requiring huge numbers of samples for precision",
            "High variance in estimates, especially for rare events",
            "Poor quality pseudo-random number generators introducing bias",
            "Difficulty parallelizing certain sequential sampling schemes",
            "Choosing an effective sampling distribution to reduce variance"
        ],
        'markov-chain-monte-carlo': [
            "Slow mixing/convergence, especially in high dimensions",
            "Detecting when the chain has actually converged (burn-in diagnosis)",
            "Autocorrelation between samples reducing effective sample size",
            "Getting stuck in a single mode of a multimodal distribution",
            "Tuning proposal distributions or step sizes for efficient exploration"
        ],
        'gaussian-process': [
            "Cubic time complexity in the number of training points, limiting scalability",
            "Choosing an appropriate kernel and its hyperparameters",
            "Numerical instability when inverting near-singular covariance matrices",
            "Poor performance on high-dimensional inputs",
            "Difficulty handling non-Gaussian or heteroscedastic noise"
        ],
        'kalman-filter': [
            "Assumes linear dynamics and Gaussian noise, which often don't hold",
            "Tuning process and measurement noise covariance matrices correctly",
            "Divergence when the model doesn't match the true system dynamics",
            "Needing extended/unscented variants for nonlinear systems, adding complexity",
            "Sensitivity to outliers in sensor measurements"
        ],
        'maximum-likelihood-estimation': [
            "Overfitting with small sample sizes",
            "No closed-form solution requiring iterative numerical optimization",
            "Sensitivity to outliers distorting the estimate",
            "Local optima in non-convex likelihood surfaces",
            "Misspecified likelihood model leading to biased parameter estimates"
        ],
        'regression-analysis': [
            "Multicollinearity among predictors inflating variance of coefficients",
            "Overfitting with too many features relative to observations",
            "Violated assumptions (linearity, homoscedasticity, normal residuals)",
            "Outliers and leverage points skewing the fit",
            "Confusing correlation captured by the model with causation"
        ],
        'gradient-descent': [
            "Choosing a learning rate that's too high (divergence) or too low (slow convergence)",
            "Getting stuck in local minima or saddle points",
            "Vanishing or exploding gradients in deep networks",
            "Sensitivity to feature scaling and initialization",
            "Noisy or oscillating loss curves with mini-batch variants"
        ],
        'simulated-annealing': [
            "Designing an effective cooling schedule",
            "Slow convergence relative to other metaheuristics",
            "Sensitive, problem-specific tuning of the acceptance function",
            "No guarantee of finding the global optimum in finite time",
            "Hard to parallelize due to its sequential nature"
        ],
        'a-star-search': [
            "Memory blow-up storing the open/closed sets on large graphs",
            "Poor performance if the heuristic isn't admissible or well-designed",
            "Ties and near-equal costs causing unnecessary node expansion",
            "Difficulty adapting to dynamic graphs where edge weights change",
            "Heuristic computation itself becoming a bottleneck"
        ],
        'hill-climbing': [
            "Getting trapped in local maxima",
            "Plateaus where neighboring states have equal value, causing stalling",
            "Ridges that require indirect moves the algorithm can't find",
            "No mechanism to escape once stuck, unlike simulated annealing"
        ],
        'tabu-search': [
            "Choosing an appropriate tabu list size (too short cycles, too long over-restricts)",
            "Extra memory and bookkeeping overhead for tracking visited states",
            "Designing aspiration criteria correctly to avoid missing good solutions",
            "Still no formal convergence guarantee"
        ],
        'dynamic-programming': [
            "Exponential memory use when the state space is large",
            "Identifying correct overlapping subproblems and recurrence relations",
            "Doesn't apply cleanly to problems lacking optimal substructure",
            "Off-by-one and boundary condition bugs in table initialization"
        ],
        'linear-programming': [
            "Real-world constraints often aren't actually linear, requiring approximation",
            "Scalability issues with very large numbers of variables/constraints",
            "Degenerate solutions causing cycling in the simplex method",
            "Numerical precision issues with ill-conditioned constraint matrices",
            "Integer requirements turning it into much harder integer programming"
        ],
        'genetic-algorithm': [
            "Premature convergence to a suboptimal population",
            "Designing effective fitness functions, crossover, and mutation operators",
            "Expensive fitness evaluation making large populations costly",
            "Difficulty tuning population size and mutation rate",
            "No guarantee of finding the global optimum"
        ],
        'genetic-programming': [
            "Bloat: evolved programs growing unnecessarily large and complex",
            "Very high computational cost from evaluating many candidate programs",
            "Designing a function/terminal set that can actually express a solution",
            "Poor interpretability of evolved program structures"
        ],
        'particle-swarm-optimization': [
            "Premature convergence when particles cluster too quickly",
            "Sensitive to inertia weight and acceleration coefficient tuning",
            "Struggles in very high-dimensional search spaces",
            "No strong theoretical convergence guarantees"
        ],
        'ant-colony-optimization': [
            "Slow convergence on large problem instances",
            "Pheromone parameter tuning (evaporation rate, weighting) is finicky",
            "Risk of stagnation around a suboptimal path",
            "High computational overhead compared to simpler heuristics"
        ],
        'evolution-strategy': [
            "Computationally expensive due to population-based evaluation",
            "Tuning self-adaptive mutation parameters can be unstable",
            "Poor scalability to very high-dimensional problems",
            "Sensitive to selection pressure settings"
        ],
        'artificial-neural-network': [
            "Requires large labeled datasets to generalize well",
            "Overfitting without proper regularization",
            "Vanishing/exploding gradients in deeper architectures",
            "Poor interpretability of learned weights ('black box')",
            "Sensitive to hyperparameter choices (architecture, learning rate, initialization)"
        ],
        'decision-tree-learning': [
            "Prone to overfitting without pruning",
            "High variance — small data changes can produce very different trees",
            "Biased splits toward features with many distinct values",
            "Struggles to capture linear relationships efficiently"
        ],
        'random-forest': [
            "Large ensembles are memory- and compute-heavy at inference time",
            "Reduced interpretability compared to a single tree",
            "Can still overfit noisy data with too many deep trees",
            "Biased toward features with many categories in importance rankings"
        ],
        'gradient-boosting': [
            "Prone to overfitting if not carefully regularized (learning rate, depth, early stopping)",
            "Slower to train sequentially compared to bagging methods",
            "Sensitive to noisy data and outliers",
            "Many hyperparameters to tune, making optimization costly",
            "Can require careful handling of missing values depending on implementation"
        ],
        'support-vector-machine': [
            "Doesn't scale well to very large datasets",
            "Choosing the right kernel and its parameters is non-trivial",
            "Sensitive to feature scaling",
            "Limited interpretability with non-linear kernels",
            "Struggles with heavily overlapping or noisy classes"
        ],
        'k-nearest-neighbors': [
            "Slow inference on large datasets (must compare to many points)",
            "Sensitive to irrelevant or unscaled features",
            "Curse of dimensionality degrading distance meaningfulness",
            "Choosing an appropriate k value and distance metric",
            "High memory usage storing the full training set"
        ],
        'naive-bayes-classifier': [
            "Independence assumption between features rarely holds in practice",
            "Zero-frequency problem when a category wasn't seen in training",
            "Poor probability calibration despite decent classification accuracy",
            "Sensitive to how continuous features are discretized/modeled"
        ],
        'linear-discriminant-analysis': [
            "Assumes classes share a common covariance structure, often unrealistic",
            "Sensitive to outliers skewing class means/covariances",
            "Struggles with non-linearly separable data",
            "Performance degrades when features are highly correlated or non-Gaussian"
        ],
        'convolutional-neural-network': [
            "Requires large amounts of labeled image data",
            "Computationally expensive to train, often needing GPUs",
            "Sensitive to input resolution and preprocessing choices",
            "Vulnerable to adversarial perturbations",
            "Limited robustness to distribution shift (lighting, angle, domain changes)"
        ],
        'recurrent-neural-network': [
            "Vanishing/exploding gradients over long sequences",
            "Difficult to parallelize training due to sequential dependency",
            "Struggles to capture very long-range dependencies",
            "Slower inference on long sequences compared to attention-based models"
        ],
        'long-short-term-memory': [
            "More parameters and compute cost than simple RNNs",
            "Still struggles with extremely long sequences",
            "Sequential computation limits parallelization/training speed",
            "Many gates make hyperparameter tuning and debugging harder"
        ],
        'transformer': [
            "Quadratic compute/memory scaling with sequence length",
            "Requires large datasets and compute to train from scratch",
            "Positional information must be added explicitly (no inherent order sense)",
            "Prone to hallucination and biases learned from training data",
            "High inference cost/latency for large models"
        ],
        'generative-adversarial-network': [
            "Training instability between generator and discriminator",
            "Mode collapse, where the generator produces limited variety",
            "Difficult to know when training has actually converged",
            "Sensitive to architecture and hyperparameter choices",
            "Evaluation metrics for generated quality are imperfect"
        ],
        'diffusion-model': [
            "Slow sampling requiring many denoising steps",
            "High computational cost to train and to run inference",
            "Difficult to control precise attributes of generated output",
            "Large memory footprint for high-resolution generation"
        ],
        'autoencoder': [
            "Can learn a trivial identity mapping without proper regularization",
            "Latent space may not be smooth or meaningfully structured",
            "Reconstruction quality vs. compression tradeoff is hard to balance",
            "Sensitive to choice of bottleneck size and architecture"
        ],
        'k-means-clustering': [
            "Must choose the number of clusters k in advance",
            "Sensitive to initial centroid placement, leading to different results",
            "Assumes spherical, similarly-sized clusters, which is often unrealistic",
            "Sensitive to outliers and unscaled features",
            "Struggles with non-convex cluster shapes"
        ],
        'hierarchical-clustering': [
            "Computationally expensive (often O(n^2) or worse) on large datasets",
            "Choosing where to cut the dendrogram is subjective",
            "Sensitive to the choice of linkage method and distance metric",
            "Cannot easily undo early merge/split decisions"
        ],
        'dbscan': [
            "Sensitive to the epsilon and minPoints parameter choices",
            "Struggles with clusters of varying density",
            "Performance degrades in high-dimensional spaces",
            "Border points can be assigned inconsistently depending on processing order"
        ],
        'principal-component-analysis': [
            "Only captures linear relationships in the data",
            "Components can be hard to interpret in terms of original features",
            "Sensitive to feature scaling before applying it",
            "Can discard information that's useful for the actual downstream task",
            "Sensitive to outliers skewing the principal directions"
        ],
        't-sne': [
            "Results are highly sensitive to the perplexity parameter",
            "Doesn't preserve global structure or distances reliably, only local",
            "Slow and memory-intensive on large datasets",
            "Non-deterministic — different runs can produce different layouts",
            "Cluster sizes/distances in the plot can be misleading"
        ],
        'self-organizing-map': [
            "Choosing an appropriate map size and topology in advance",
            "Sensitive to learning rate and neighborhood radius schedules",
            "Slow to train on large, high-dimensional datasets",
            "Results can be hard to interpret and validate quantitatively"
        ],
        'association-rule-learning': [
            "Combinatorial explosion of candidate itemsets on large datasets",
            "Choosing meaningful support/confidence/lift thresholds",
            "Generates many redundant or spurious rules",
            "Doesn't scale well to very large or high-dimensional transaction data"
        ],
        'q-learning': [
            "Q-table becomes intractable in large or continuous state spaces",
            "Slow convergence, requiring many episodes of exploration",
            "Balancing exploration vs. exploitation (epsilon tuning)",
            "Overestimation bias in Q-value updates",
            "Sensitive to reward shaping and hyperparameters"
        ],
        'temporal-difference-learning': [
            "Sensitive to learning rate and bootstrapping bias",
            "Can be unstable when combined with function approximation",
            "Slow convergence in sparse-reward environments",
            "Correlated updates from sequential data can hurt training stability"
        ],
        'policy-gradient-method': [
            "High variance in gradient estimates, slowing convergence",
            "Sample inefficiency requiring many environment interactions",
            "Sensitive to learning rate — small changes can destabilize training",
            "Difficulty designing reward signals that avoid unintended policies",
            "Can converge to poor local optima"
        ],
        'multi-armed-bandit': [
            "Balancing exploration and exploitation without over/under-exploring",
            "Non-stationary reward distributions breaking standard assumptions",
            "Scaling poorly with a very large number of arms",
            "Choosing the right algorithm variant (UCB, Thompson sampling, epsilon-greedy) for the context"
        ],
        'expert-system': [
            "Knowledge acquisition bottleneck — capturing expert rules is slow and costly",
            "Rule base becomes hard to maintain as it grows (rule interactions/conflicts)",
            "Brittle outside the narrow domain it was designed for",
            "Doesn't handle uncertainty or novel situations gracefully"
        ],
        'constraint-satisfaction-problem': [
            "Combinatorial explosion of the search space for large problems",
            "Choosing effective variable/value ordering heuristics",
            "Detecting and encoding all real-world constraints correctly",
            "Backtracking search can be slow without good constraint propagation"
        ],
        'fuzzy-logic': [
            "Designing membership functions is subjective and hard to validate",
            "Rule base can grow unwieldy as the number of variables increases",
            "Difficult to formally prove correctness or stability of the system",
            "Tuning is often ad hoc rather than principled"
        ],
        'automated-theorem-proving': [
            "Combinatorial explosion of the proof search space",
            "Many problems are undecidable or intractable in general",
            "Translating informal problem statements into formal logic is error-prone",
            "Proof search can be very slow without good heuristics/tactics"
        ],
        'case-based-reasoning': [
            "Case base can grow large and slow down retrieval over time",
            "Defining a good similarity/distance metric between cases is hard",
            "Adapting a retrieved case to a new situation isn't always straightforward",
            "Quality depends heavily on the coverage and quality of stored cases"
        ],
        'semantic-network': [
            "Manually building and maintaining the network is labor-intensive",
            "Ambiguity in relationship semantics between nodes",
            "Scaling to very large knowledge bases without inconsistency",
            "No built-in mechanism for reasoning under uncertainty"
        ],
        'bayesian-network': [
            "Learning the graph structure from data is NP-hard in general",
            "Exact inference becomes intractable in large or dense networks",
            "Requires careful elicitation of conditional probability tables",
            "Sensitive to incorrect assumptions about conditional independence"
        ],
        'markov-random-field': [
            "Exact inference is generally intractable, requiring approximations",
            "Computing the normalizing constant (partition function) is expensive",
            "Choosing appropriate potential functions for the domain",
            "Training can be slow due to repeated inference in the loop"
        ],
        'conditional-random-field': [
            "Training is computationally expensive compared to simpler classifiers",
            "Feature engineering is often needed to get good performance",
            "Inference (decoding) can be slow on long sequences",
            "Scaling to large label sets increases complexity significantly"
        ],
        'graph-neural-network': [
            "Over-smoothing, where node representations become indistinguishable in deep networks",
            "Scalability challenges on very large graphs",
            "Sensitive to graph structure quality and missing/noisy edges",
            "Limited expressiveness for certain graph structures without careful design",
            "Difficult to batch efficiently due to variable graph sizes"
        ]
    }

    if slug and slug in manual_problems:
        return manual_problems[slug]

    # fallback
    return []

# Now modify files
updated = []
skipped = []
missing = []
for cat, name, slug in patterns:
    php = src / f"{slug}.php"
    if not php.exists():
        missing.append(slug)
        continue
    s = php.read_text(encoding='utf-8')
    # build new examples HTML
    exs = problems_for(cat, name, slug)
    html = ""
    if len(exs) > 0:
        html = '\n    <h2>Problems</h2>\n    <ul>\n'
        for title in exs:
            html += f'        <li>{title}</li>\n'
        html += '    </ul>\n\n'

    # If Problems section exists, replace it; otherwise insert after How section or </dl>
    m_problems = re.search(r'(<h2>\s*Problems\s*</h2>\s*<ul>[\s\S]*?</ul>)', s, flags=re.I)
    if m_problems:
        new_s = s[:m_problems.start()] + html + s[m_problems.end():]
        php.write_text(new_s, encoding='utf-8')
        updated.append(str(php.relative_to(repo)))
        continue
    # find How does it work? section end: find closing </p> after that header
    m = re.search(r'(</h2>\s*\n\s*<p>[\s\S]*?</p>\s*)(?=<h2|</section>)', s, flags=re.I)
    # This regex might match other h2 sections; better to locate the specific header
    mh = re.search(r'<h2>Examples</h2>', s, flags=re.I)
    if not mh:
        # try inserting after </dl>
        m2 = re.search(r'</dl>', s, flags=re.I)
        if not m2:
            skipped.append(str(php.relative_to(repo)))
            continue
        insert_pos = m2.end()
    else:
        # find end of the how section: start from mh.end() and find next h2 or end of section
        start = mh.end()
        mnext = re.search(r'\n\s*<h2', s[start:], flags=re.I)
        if mnext:
            insert_pos = start + mnext.start()
        else:
            # before </section>
            msec = re.search(r'</section>', s[start:], flags=re.I)
            insert_pos = start + (msec.start() if msec else len(s[start:]))
    # Insert new examples HTML at computed position
    new_s = s[:insert_pos] + '\n    ' + html + s[insert_pos:]
    php.write_text(new_s, encoding='utf-8')
    updated.append(str(php.relative_to(repo)))

print('Updated files:')
for u in updated:
    print(' -', u)
print('\nSkipped (already had Examples):')
for u in skipped:
    print(' -', u)
print('\nMissing php files for patterns:')
for m in missing:
    print(' -', m)
print('\nDone.')
