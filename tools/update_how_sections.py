#!/usr/bin/env python3
from pathlib import Path
import re

repo = Path(__file__).resolve().parents[1]
rewritten = repo / 'llm' / 'claude-input-rewritten.md'
src = repo / 'src'

text = rewritten.read_text(encoding='utf-8')

# Parse categories and entries. Find lines like '## 1. Probabilistic / Statistical Reasoning'
cat_re = re.compile(r'^##\s+\d+\.\s+(.+)$', re.M)
entry_re = re.compile(r'^###\s+(.*?)\s+\(`([^`]+)`\)\n', re.M)

# Build list of (category, name, slug) by scanning text
lines = text.splitlines()
current_cat = None
patterns = []
for i, line in enumerate(lines):
    m = re.match(r'^##\s+\d+\.\s+(.+)$', line)
    if m:
        current_cat = m.group(1).strip()
        continue
    m2 = re.match(r'^###\s+(.*?)\s+\(`([^`]+)`\)', line)
    if m2:
        name = m2.group(1).strip()
        slug = m2.group(2).strip()
        patterns.append((current_cat, name, slug))

# Category-based generator

def gen_text(category, name):
    # Short paragraphs focusing on mechanism and typical steps, avoiding restating definition
    cat = (category or '').lower()
    if 'probabilistic' in cat or 'statistical' in cat:
        if 'bayesian' in name.lower():
            return ("In practice this means maintaining a probability distribution (the prior), computing how likely new observations are under possible hypotheses (the likelihood), "
                    "and combining them to form an updated distribution (the posterior). Implementations often work incrementally: observe a batch or a single datum, compute the likelihood, multiply it into the prior and renormalize. "
                    "Numerical care (log-probabilities) and choice of conjugate priors or sampling methods are common engineering concerns.")
        if 'markov chain monte carlo' in name.lower() or 'mcmc' in name.lower():
            return ("MCMC constructs a sequence of proposals across the space and accepts or rejects them so that long runs produce samples from the desired distribution. Core steps: propose a move, compute acceptance probability, accept or reject, and repeat. Practical issues include burn-in, mixing, and autocorrelation which determine how many samples to keep or thin.")
        if 'kalman' in name.lower():
            return ("A Kalman filter alternates predict and update steps: predict the state forward using the motion model, then incorporate the noisy measurement by computing a gain that balances model and measurement uncertainty. It maintains a mean and covariance and is efficient for linear Gaussian systems; non-linear variants linearize or use sigma-points.")
        return (f"{name} algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.")
    if 'search' in cat or 'optimization' in cat:
        if 'gradient' in name.lower():
            return ("Gradient-based methods compute the gradient of an objective with respect to parameters and take steps in the negative gradient direction. Key practical aspects are step-size (learning rate), batch vs full gradients, and techniques like momentum or adaptive optimizers (Adam) to improve convergence and stability.")
        if 'a*' in name.lower() or 'a*' in name:
            return ("A* expands nodes from a priority queue ordered by cost-so-far plus heuristic estimate. Implement it by maintaining open and closed sets, updating costs when better paths are found, and ensuring the heuristic is admissible for optimality. Efficient implementations use appropriate data structures for the frontier.")
        if 'dynamic programming' in name.lower():
            return ("Dynamic programming solves problems by computing and reusing solutions to overlapping subproblems. Implementations are either memoized recursion or iterative table filling; identify state variables and transitions, and ensure an ordering that respects dependencies to compute bottom-up.")
        return (f"{name} methods search a space of candidate solutions. They typically define neighbor moves or gradients, evaluate objective functions, and use schedules or memory to escape local optima or to converge reliably.")
    if 'evolution' in cat or 'nature' in cat:
        return (f"{name} methods maintain a population of candidates and use variation (mutation/crossover) and selection to improve fitness over generations. Implementations manage representation encoding, selection pressure, and diversity to avoid premature convergence; often parallel evaluations are used to speed up fitness computation.")
    if 'supervised' in cat:
        if 'neural' in name.lower():
            return ("Neural networks compose layers of parameterised functions; training minimises a loss over labeled examples by backpropagating gradients and updating parameters with optimisers. Important engineering details include architecture choices, regularisation, and validation to avoid overfitting.")
        if 'random forest' in name.lower() or 'decision tree' in name.lower():
            return ("Trees split data by feature thresholds to partition space; ensemble methods build many trees on bootstrapped samples and aggregate predictions. Focus on feature selection, depth control, and understanding variable importance when using these models.")
        return (f"{name} models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.")
    if 'deep learning' in cat:
        if 'transformer' in name.lower():
            return ("Transformers compute self-attention between all positions so each token builds a context-aware representation; stacking attention and feed-forward blocks and training with large batches leads to strong sequence models. Implementation focuses on attention masks, positional encoding, and efficient batched matrix operations.")
        if 'convolution' in name.lower():
            return ("Convolutional networks apply learned filters locally across the input to detect patterns; pooling and hierarchical depth let them compose local features into global concepts. Training uses backpropagation with data augmentation and regularisation.")
        return (f"{name} architectures are specialised neural designs; they define layer types and connectivity that bias the model to particular data structures. Implementations balance depth, width, and compute considerations for practical training.")
    if 'unsupervised' in cat:
        if 'k-means' in name.lower():
            return ("k-Means iteratively assigns points to nearest centroids then recomputes centroids; initialise carefully (k-means++) and run multiple restarts to avoid poor local minima. It’s sensitive to scale and needs a chosen k.")
        if 'pca' in name.lower() or 'principal' in name.lower():
            return ("PCA computes eigenvectors of the covariance matrix (or SVD of the data) and projects data onto principal axes. Implementation concerns include centering data, efficient SVD for large datasets, and interpreting component loadings.")
        return (f"{name} methods discover structure without labels; they typically define an objective or a similarity measure and use iterative updates, matrix factorisations, or density estimates to find patterns.")
    if 'reinforcement' in cat:
        return (f"{name} operates by interacting with an environment: observe state, choose action, receive reward, and update a policy or value estimator. Practical implementations must balance exploration and exploitation and handle credit assignment across time via bootstrapping or Monte Carlo returns.")
    if 'symbolic' in cat or 'logic' in cat:
        return (f"{name} methods manipulate symbols or rules: represent knowledge explicitly, and apply inference algorithms (forward/backward chaining, constraint propagation, search). Implementations focus on rule ordering, conflict resolution, and efficient indexing of facts.")
    if 'graphical' in cat or 'structured' in cat:
        return (f"{name} represents structured relationships between variables or nodes. Algorithms operate by message passing, factorisation, or neural message aggregation; careful modelling of edges and local functions is key to good results.")
    # default
    return (f"{name} works by applying its core mechanism to inputs and producing outputs; implementations should attend to data representation, computational trade-offs, and common failure modes specific to the pattern.")

# Now apply to src files
updated = []
skipped = []
missing = []
for cat, name, slug in patterns:
    php = src / f"{slug}.php"
    if not php.exists():
        missing.append(slug)
        continue
    s = php.read_text(encoding='utf-8')
    # find How does it work section - from <h2>How does it work?</h2> to next <h2
    m = re.search(r'(<h2>\s*How does it work\?\s*</h2>)([\s\S]*?)(?=<h2|<h1|<h3|</section>)', s, flags=re.I)
    new_par = gen_text(cat, name)
    new_html = '<h2>How does it work?</h2>\n    <p>' + new_par.replace('\n',' ') + '</p>\n'
    if m:
        new_s = s[:m.start()] + new_html + s[m.end():]
        php.write_text(new_s, encoding='utf-8')
        updated.append(str(php.relative_to(repo)))
    else:
        # if there's no existing section, try to insert after </dl>
        m2 = re.search(r'</dl>', s, flags=re.I)
        if m2:
            insert_pos = m2.end()
            new_s = s[:insert_pos] + '\n    ' + new_html + s[insert_pos:]
            php.write_text(new_s, encoding='utf-8')
            updated.append(str(php.relative_to(repo)))
        else:
            skipped.append(str(php.relative_to(repo)))

print('Updated files:')
for u in updated:
    print(' -', u)
print('\nMissing php files for patterns:')
for m in missing:
    print(' -', m)
print('\nSkipped (no place to insert):')
for s in skipped:
    print(' -', s)
print('\nDone.')
