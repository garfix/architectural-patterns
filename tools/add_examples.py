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

def examples_for(category, name, slug=None):
    # Prefer manual, specific examples per pattern slug; fall back to category heuristics.
    manual_examples = {
        'bayesian-inference': [
            ("Medical diagnosis — Probabilistic diagnosis", "Combine prior disease prevalence with patient test results to update the probability of conditions in clinical decision support systems."),
            ("Email spam filtering", "Compute posterior probability that a message is spam by updating token likelihoods as new labeled messages arrive."),
            ("A/B testing analysis", "Incorporate prior expectations and observed conversion data to estimate treatment effects and uncertainty for product experiments.")
        ],
        'hidden-markov-model': [
            ("Speech recognition", "Model phoneme sequences and noisy acoustic observations to decode spoken words in ASR systems."),
            ("Part-of-speech tagging", "Infer POS tags for words in sentences by modelling tag transitions and word emissions."),
            ("User activity modelling", "Infer latent user states from clickstreams to personalise recommendations or detect churn.")
        ],
        'markov-decision-process': [
            ("Robotics navigation", "Model robot movement and rewards to compute optimal policies for reaching goals while avoiding obstacles."),
            ("Inventory management", "Use states for stock levels and actions for reorder decisions to minimise costs under uncertainty."),
            ("Automated trading backtests", "Model discrete states and actions to evaluate policy performance under simulated market dynamics.")
        ],
        'monte-carlo-method': [
            ("Option pricing", "Simulate many price paths to estimate the expected payoff of financial derivatives like European options."),
            ("Light transport in rendering", "Estimate global illumination by randomly sampling light paths for realistic image synthesis."),
            ("Uncertainty propagation", "Approximate integrals or expectations where analytic solutions are intractable (engineering risk assessments).")
        ],
        'markov-chain-monte-carlo': [
            ("Bayesian posterior sampling", "Use MCMC (e.g., Metropolis-Hastings, Gibbs) to draw samples from complex posterior distributions in hierarchical models."),
            ("Topic modelling (LDA)", "Use collapsed Gibbs sampling to infer topic assignments for documents at scale."),
            ("Phylogenetic inference", "Sample tree-space posterior distributions for evolutionary models where direct computation is impossible.")
        ],
        'gaussian-process': [
            ("Surrogate modelling", "Model expensive-to-evaluate functions (e.g., engineering simulations) to guide Bayesian optimization."),
            ("Spatial interpolation (kriging)", "Predict environmental measurements at unsampled locations with uncertainty estimates."),
            ("Time-series smoothing", "Nonparametric regression for small-data forecasts with calibrated uncertainty bands.")
        ],
        'kalman-filter': [
            ("GPS/INS sensor fusion", "Estimate vehicle position and velocity by combining inertial predictions and intermittent GPS fixes."),
            ("Aircraft navigation", "Real-time state estimation for flight control using linear dynamics and noisy instruments."),
            ("Object tracking", "Smooth and predict moving object trajectories from noisy radar or camera measurements.")
        ],
        'maximum-likelihood-estimation': [
            ("Logistic regression fitting", "Estimate model coefficients by maximising data likelihood for binary outcomes in risk models."),
            ("Gaussian mixture parameters", "Fit component means and variances by maximising likelihood with EM for clustering."),
            ("Survival model calibration", "Estimate hazard parameters from censored time-to-event data in clinical studies.")
        ],
        'regression-analysis': [
            ("House price modelling", "Predict property prices from features (size, location) using linear or regularised regression."),
            ("Dose–response curves", "Model the relationship between drug dose and effect using parametric regression."),
            ("Forecasting sales", "Fit regression models with seasonal covariates for short-term demand prediction.")
        ],
        'gradient-descent': [
            ("Neural network training", "Minimise training loss with stochastic gradient descent variants (Adam, RMSProp) on large datasets."),
            ("Logistic regression optimisation", "Fit classifiers by minimising cross-entropy via batch or mini-batch gradient steps."),
            ("Image deblurring", "Solve differentiable inverse problems by optimising reconstruction loss with gradient-based solvers.")
        ],
        'simulated-annealing': [
            ("VLSI placement", "Optimise chip component layouts with a cooling schedule to escape local minima."),
            ("Traveling Salesman approximations", "Find near-optimal tours via random neighbour moves and temperature-controlled acceptance."),
            ("Job-shop scheduling", "Schedule tasks on machines by accepting worse moves early and reducing acceptance over time.")
        ],
        'a-star-search': [
            ("Game AI pathfinding", "Find shortest paths for NPCs on grid maps using admissible heuristics like Manhattan distance."),
            ("Robot motion planning", "Compute collision-free routes in discretized maps with heuristics to focus search."),
            ("Route planning in maps", "Combine road network costs and heuristic estimates for efficient navigation on graphs.")
        ],
        'hill-climbing': [
            ("Local optimisation for hyperparameters", "Greedy local search for small discrete hyperparameter spaces where gradients aren't available."),
            ("Feature selection", "Iteratively add/remove features and keep moves that improve validation score."),
            ("Layout tuning", "Iterative improvement of UI layouts or floor plans with small neighbor edits.")
        ],
        'tabu-search': [
            ("Vehicle routing improvements", "Use tabu lists to avoid recent routes and escape cycles in routing heuristics."),
            ("Crew scheduling", "Search large combinatorial schedules while forbidding recent swaps to diversify search."),
            ("Combinatorial timetabling", "Improve initial solutions with tabu-guided neighborhood moves to respect constraints.")
        ],
        'dynamic-programming': [
            ("Sequence alignment", "Compute optimal alignments in bioinformatics (Needleman–Wunsch) using DP matrices."),
            ("Knapsack and resource allocation", "Exact DP solutions for constrained optimisation over item choices."),
            ("Optimal control (discrete)", "Bellman backups for finite-horizon decision processes and value iteration.")
        ],
        'linear-programming': [
            ("Supply chain optimisation", "Minimise transportation and production cost with LP constraints for capacities."),
            ("Diet optimisation", "Choose food mixes to meet nutrition targets at minimum cost using LP formulations."),
            ("Blending problems", "Compute optimal blends of components (oil, chemicals) respecting quality constraints.")
        ],
        'genetic-algorithm': [
            ("Antenna design", "Evolve shape parameters to maximise signal characteristics where analytic gradients are unavailable."),
            ("Scheduling optimisation", "Evolve candidate schedules with crossover and mutation operators for high-quality timetables."),
            ("Game content generation", "Evolve level layouts or parameters for playability and novelty.")
        ],
        'genetic-programming': [
            ("Symbolic regression", "Evolve mathematical expressions that explain data when model forms are unknown."),
            ("Automated trading rules", "Evolve rule sets from historical market data to generate candidate trading strategies."),
            ("Control policy synthesis", "Evolve small programs that implement control logic for robotics or simulations.")
        ],
        'particle-swarm-optimization': [
            ("Hyperparameter tuning", "Optimize continuous hyperparameters (e.g., learning rates) across a search space using PSO."),
            ("Antenna array calibration", "Find parameter settings that maximise signal metrics via swarm-based search."),
            ("Continuous engineering design", "Search continuous design variables for aerodynamic or structural objectives.")
        ],
        'ant-colony-optimization': [
            ("Vehicle routing", "Use pheromone trails to bias constructive heuristics for practical routing problems."),
            ("Network routing protocols", "Heuristic path selection inspired by ants for adaptive routing in communication networks."),
            ("Combinatorial optimisation benchmarks", "Apply ACO to TSP variants and graph-based optimisation tasks.")
        ],
        'evolution-strategy': [
            ("Continuous parameter optimisation", "Tune high-dimensional continuous controller weights via mutation and selection."),
            ("Neuroevolution (weights)", "Evolve neural network weights for control tasks where gradient signals are noisy."),
            ("Robust design", "Search for parameter settings that perform well under varying simulated conditions.")
        ],
        'artificial-neural-network': [
            ("Image classification", "Train convolutional networks to detect objects in medical imaging or autonomous vehicles."),
            ("Speech recognition", "Sequence models to transcribe spoken language into text for virtual assistants."),
            ("Anomaly detection", "Autoencoder-based architectures to detect manufacturing defects from sensor data.")
        ],
        'decision-tree-learning': [
            ("Loan approval rules", "Learn interpretable decision paths to predict creditworthiness for regulatory reviews."),
            ("Medical triage heuristics", "Derive simple rule-based decisions from clinical datasets for initial screening."),
            ("Customer churn segmentation", "Identify decision splits that separate high and low churn probability groups.")
        ],
        'random-forest': [
            ("Fraud detection", "Ensemble tree models detect anomalous transactions using many randomised trees."),
            ("Feature importance analysis", "Use permutation importance from forests to prioritise variables for product teams."),
            ("Retail demand forecasting", "Apply ensembles on tabular sales data for robust short-term forecasts.")
        ],
        'gradient-boosting': [
            ("Credit scoring", "Train boosted trees (XGBoost/LightGBM) for high-accuracy risk models in finance."),
            ("Click-through rate prediction", "Use gradient-boosted models on sparse features for ad-serving systems."),
            ("Customer lifetime value", "Predict long-term value with boosted ensembles that handle heterogeneous features.")
        ],
        'support-vector-machine': [
            ("Text classification", "Linear SVMs on TF-IDF features for spam or sentiment classification."),
            ("Face recognition (embedding classification)", "Use kernel SVMs on precomputed embeddings for small-scale recognition tasks."),
            ("Anomaly boundary detection", "Use one-class SVM to model normal behaviour and detect outliers.")
        ],
        'k-nearest-neighbors': [
            ("Recommendation by similarity", "Nearest-neighbour lookup on user/item embeddings for simple recommender baselines."),
            ("Medical case retrieval", "Retrieve past patient cases with similar measurements for clinical decision support."),
            ("Image retrieval", "Find images with similar descriptors in a database using k-NN search.")
        ],
        'naive-bayes-classifier': [
            ("Email spam filtering", "Fast multinomial Naive Bayes on token counts for production spam classifiers."),
            ("Document classification", "Classify news articles or support tickets by word-frequency models."),
            ("Baseline text categorisation", "Quick baseline models in pipelines before moving to heavier architectures.")
        ],
        'linear-discriminant-analysis': [
            ("Face recognition projection", "Project high-dimensional features to lower dimensions for classification tasks."),
            ("Medical diagnostic scoring", "Linear separators for multi-class problems with Gaussian assumptions."),
            ("Feature reduction for classifiers", "Reduce dimensionality before applying simple classifiers for speed.")
        ],
        'convolutional-neural-network': [
            ("Object detection", "Train CNN backbones for detectors used in autonomous driving and surveillance."),
            ("Medical image segmentation", "U-Net style CNNs for delineating tissue boundaries in radiology."),
            ("Style transfer", "Use convolutional features to manipulate visual style while preserving content.")
        ],
        'recurrent-neural-network': [
            ("Language modelling (RNNs)", "Sequence models that predict next tokens for early text generators."),
            ("Time-series forecasting", "RNNs for short-term prediction of sensor or financial series."),
            ("Sequence labelling", "Use RNNs for tagging tasks like named-entity recognition when data is sequential.")
        ],
        'long-short-term-memory': [
            ("Speech synthesis", "LSTM-based sequence models for early TTS pipelines."),
            ("Machine translation (early systems)", "Sequence-to-sequence LSTM encoder-decoders for translation tasks."),
            ("Anomaly detection in sequences", "Model normal sequential patterns and flag deviations in operational logs.")
        ],
        'transformer': [
            ("Large language models", "Pretrain transformer decoders/encoder-decoder stacks for text generation and understanding."),
            ("Machine translation", "State-of-the-art encoder-decoder transformers for high-quality translation."),
            ("Protein folding embeddings", "Apply transformer architectures to model amino-acid sequences and structural properties.")
        ],
        'generative-adversarial-network': [
            ("Image synthesis", "Generate photorealistic images (faces, textures) for data augmentation or creative tools."),
            ("Super-resolution", "Learn a mapping from low- to high-resolution images using adversarial loss."),
            ("Domain adaptation", "Translate styles between domains (e.g., day↔night) with CycleGAN variants.")
        ],
        'diffusion-model': [
            ("Text-to-image generation", "Learn reverse diffusion to generate high-fidelity images from text embeddings."),
            ("Denoising and inpainting", "Use diffusion samplers to restore missing or corrupted image regions."),
            ("Audio synthesis", "Generate or transform audio waveforms using diffusion-based models for music or speech.")
        ],
        'autoencoder': [
            ("Dimensionality reduction", "Learn compact latent codes for visualization or fast retrieval."),
            ("Anomaly detection", "Train autoencoders to reconstruct normal examples; high reconstruction error flags anomalies."),
            ("Image compression", "Learn lossy compression codecs by minimising reconstruction error in the latent space.")
        ],
        'k-means-clustering': [
            ("Customer segmentation", "Cluster customers by behaviour for targeted marketing campaigns."),
            ("Color quantization", "Reduce image palettes by clustering pixel colours for compression."),
            ("Document clustering", "Group similar documents for search indexing and exploratory analysis.")
        ],
        'hierarchical-clustering': [
            ("Phylogenetic trees", "Build hierarchical relations between species based on genetic distance."),
            ("Customer hierarchy discovery", "Reveal nested segments in user bases for tiered targeting."),
            ("Agglomerative image grouping", "Cluster visual features hierarchically for multi-scale analysis.")
        ],
        'dbscan': [
            ("Geospatial hotspot detection", "Find dense clusters of events (e.g., crime, ride requests) without predefining cluster count."),
            ("Outlier detection in logs", "Identify noise points in operational logs as anomalies."),
            ("Discovering dense communities", "Cluster social network embeddings where clusters have arbitrary shapes.")
        ],
        'principal-component-analysis': [
            ("Face recognition preprocessing", "Reduce dimensionality of image descriptors before nearest-neighbour matching."),
            ("Variance-based feature reduction", "Project features to top components to denoise data for downstream models."),
            ("Exploratory data analysis", "Visualise high-dimensional datasets on 2–3 principal axes to spot structure.")
        ],
        't-sne': [
            ("Visualising embeddings", "Project high-dimensional model embeddings to 2D for cluster inspection in ML experiments."),
            ("Single-cell RNA-seq analysis", "Visualise cell populations and subtypes from expression profiles."),
            ("Debugging representation quality", "Use t-SNE plots to inspect if different classes separate in learned embeddings.")
        ],
        'self-organizing-map': [
            ("Topology-preserving embedding", "Map high-dimensional sensory data onto 2D grids for visual analytics."),
            ("Customer behaviour maps", "Visual cluster maps that help marketing teams explore segments."),
            ("Anomaly visualisation", "Spot unusual input patterns as isolated nodes on the map.")
        ],
        'association-rule-learning': [
            ("Market basket analysis", "Discover itemsets and association rules (e.g., diapers→baby wipes) for cross-selling."),
            ("Web click pattern mining", "Find common navigation sequences to improve site layout."),
            ("Retail promotion planning", "Generate rule-based product bundles that co-occur in receipts.")
        ],
        'q-learning': [
            ("Grid-world navigation", "Tabular Q-learning to teach agents to reach goals in discrete environments."),
            ("Game AI (classic)", "Train agents to play simple arcade games using Q-value updates and epsilon-greedy exploration."),
            ("Ad placement bandits", "Use Q-learning variants to learn action values for contextual decision settings.")
        ],
        'temporal-difference-learning': [
            ("TD(0) for policy evaluation", "Estimate state-value functions from bootstrapped returns in episodic tasks."),
            ("Predictive signal in forecasting", "Use TD updates to predict future signals with online bootstrapping."),
            ("Combining simulation and real data", "Update value estimates online as real interactions arrive in control systems.")
        ],
        'policy-gradient-method': [
            ("Continuous control (robotics)", "Optimise stochastic policies directly for torque/actuator control using REINFORCE or PPO."),
            ("Dialogue policy learning", "Train end-to-end dialogue managers that select responses to maximise user satisfaction."),
            ("Portfolio optimisation", "Learn stochastic allocation policies to trade off risk and return in simulation.")
        ],
        'multi-armed-bandit': [
            ("Ad selection", "Balance exploration and exploitation to pick which ad variant to show to maximise clicks."),
            ("Clinical trial allocation", "Adaptively assign treatments to patients to improve outcomes while learning efficacy."),
            ("News recommendation", "Serve articles while learning click rates with contextual bandit algorithms.")
        ],
        'expert-system': [
            ("Medical diagnostic checklists", "Encode clinical heuristics as rules to provide decision support for common conditions."),
            ("Configuration management", "Rule engines that validate system configurations and propose fixes."),
            ("Loan eligibility rules", "Deterministic rule sets for initial screening in financial services.")
        ],
        'constraint-satisfaction-problem': [
            ("Exam timetabling", "Assign exams to slots and rooms satisfying room capacity and conflict constraints."),
            ("Sudoku solving", "Express constraints and solve with backtracking for exact solutions."),
            ("Resource allocation in scheduling", "Enforce complex availability and precedence constraints in rostering.")
        ],
        'fuzzy-logic': [
            ("Washing machine controllers", "Smoothly map sensor values to control signals with fuzzy rules for robust behaviour."),
            ("Consumer product scoring", "Combine subjective metrics with fuzzy membership to compute overall ratings."),
            ("Control systems with imprecise inputs", "Handle linguistic rules (e.g., 'slightly hot') in HVAC control.")
        ],
        'automated-theorem-proving': [
            ("Formal verification of hardware", "Prove correctness properties of circuits with automated provers."),
            ("Program verification", "Check invariants and prove absence of certain classes of bugs in critical code."),
            ("Mathematical proof search", "Assist mathematicians by searching formal proof spaces for lemmas and theorems.")
        ],
        'case-based-reasoning': [
            ("Legal precedent retrieval", "Find past cases with similar facts to support legal arguments."),
            ("Help-desk ticket reuse", "Suggest solutions based on previously solved tickets with similar symptoms."),
            ("Design reuse", "Adapt past engineering designs to new requirements by analogical reasoning.")
        ],
        'semantic-network': [
            ("Knowledge graphs for QA", "Represent entities and relations to answer factual queries in enterprise search."),
            ("Ontology-driven recommendations", "Use typed relationships to infer related products or concepts."),
            ("Entity linking", "Map text mentions to graph nodes to support downstream NLP tasks.")
        ],
        'bayesian-network': [
            ("Diagnostic decision support", "Model causal symptom-disease relations to compute posterior disease probabilities."),
            ("Risk assessment", "Model dependencies between risk factors to compute joint failure probabilities."),
            ("Gene regulatory modelling", "Represent probabilistic interactions between genes for biological inference.")
        ],
        'markov-random-field': [
            ("Image denoising", "Model pixel neighbourhoods with MRFs for pairwise-smoothness priors in restoration."),
            ("Spatial label smoothing", "Enforce local consistency in segmentation tasks using MRF priors."),
            ("Markov networks for social ties", "Model undirected relationships among entities in network analysis.")
        ],
        'conditional-random-field': [
            ("Sequence labelling (NER)", "Tag tokens in sentences with labels by modelling conditional dependencies across labels."),
            ("Part-of-speech tagging", "Model label interactions to improve tagging accuracy over independent classifiers."),
            ("Handwriting recognition post-processing", "Refine per-character predictions using CRF smoothing.")
        ],
        'graph-neural-network': [
            ("Molecule property prediction", "Predict chemical properties by operating on molecular graphs for drug discovery."),
            ("Social influence modelling", "Predict node labels or link formation using neighborhood aggregation in social graphs."),
            ("Traffic flow prediction", "Use road network graphs and GNNs to predict future congestion patterns.")
        ]
    }

    # return manual mapping when available
    if slug and slug in manual_examples:
        return manual_examples[slug]

    # Fall back to lightweight category-based examples (short, specific)
    cat = (category or '').lower()
    n = name.lower()
    if 'probabilistic' in cat or 'statistical' in cat:
        return [("Practical inference", "Estimate parameters or states from noisy data in applied systems."), ("Sensor fusion", "Combine multiple noisy measurements into a single estimate."), ("A/B analysis", "Update beliefs about variants using observed outcomes.")]
    if 'optimization' in cat or 'search' in cat:
        return [("Engineering optimisation", "Tune design parameters to meet constraints and objectives."), ("Route or scheduling", "Apply heuristic search to practical routing or scheduling problems."), ("Parameter tuning", "Search continuous or discrete parameters for better performance.")]
    if 'supervised' in cat or 'deep' in cat:
        return [("Prediction", "Train models to map inputs to labels in real-world datasets."), ("Transfer learning", "Fine-tune pre-trained models for domain-specific tasks."), ("Model evaluation", "Validate performance on held-out data before deployment.")]
    # generic fallback
    return [("Real-world case", "A concrete application showing how the pattern solves a domain problem."), ("Tooling example", "A common library or system where the pattern is used."), ("Design example", "How the pattern maps to components in production.")]

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
    exs = examples_for(cat, name, slug)
    html = ""
    if len(exs) > 0:
        html = '\n    <h2>Examples</h2>\n    <ul>\n'
        for title, desc in exs:
            html += f'        <li>{title} — {desc}</li>\n'
        html += '    </ul>\n\n'

    # If Examples section exists, replace it; otherwise insert after How section or </dl>
    m_examples = re.search(r'(<h2>\s*Examples\s*</h2>\s*<ul>[\s\S]*?</ul>)', s, flags=re.I)
    if m_examples:
        new_s = s[:m_examples.start()] + html + s[m_examples.end():]
        php.write_text(new_s, encoding='utf-8')
        updated.append(str(php.relative_to(repo)))
        continue
    # find How does it work? section end: find closing </p> after that header
    m = re.search(r'(</h2>\s*\n\s*<p>[\s\S]*?</p>\s*)(?=<h2|</section>)', s, flags=re.I)
    # This regex might match other h2 sections; better to locate the specific header
    mh = re.search(r'<h2>\s*How does it work\?\s*</h2>', s, flags=re.I)
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
