## Probabilistic / Statistical Reasoning

Techniques that represent uncertainty explicitly and reason with probabilities.

- **Bayesian inference** — Updates the probability of a hypothesis as new evidence arrives, using prior beliefs combined with observed data. *Used for: medical diagnosis, spam filtering, A/B test analysis, any problem where you need to reason under uncertainty and update beliefs incrementally.*
- **Markov models** (chains, HMMs, MDPs) — Model systems as sequences of states where the next state depends only on the current one. *Used for: speech recognition, text prediction, weather modeling, sequential/time-based processes.*
- **Monte Carlo methods** — Use repeated random sampling to estimate quantities that are hard to compute exactly. *Used for: numerical integration, risk simulation, approximating complex probability distributions.*
- **Gaussian processes** — A probabilistic model over functions, giving predictions plus uncertainty estimates. *Used for: small-data regression, Bayesian optimization, situations where knowing "how confident is this prediction" matters.*

## Search & Optimization

Techniques for finding the best (or a good-enough) solution in a large space of possibilities.

- **Genetic algorithms / evolutionary computation** — Evolves a population of candidate solutions through selection, crossover, and mutation. *Used for: optimization problems with huge, poorly-understood, or non-differentiable search spaces (scheduling, design optimization, hyperparameter tuning).*
- **Simulated annealing** — Explores solutions by allowing occasional "worse" moves early on (like cooling metal) to avoid getting stuck in local optima. *Used for: combinatorial optimization (routing, layout problems).*
- **Gradient descent** — Iteratively adjusts parameters in the direction that reduces error fastest. *Used for: training almost all modern neural networks and many statistical models.*
- **Heuristic search** (A*, hill climbing) — Explores a search space using rules of thumb to prioritize promising paths. *Used for: pathfinding, puzzle solving, planning problems with known structure.*

## Supervised Learning

Techniques that learn a mapping from inputs to known outputs.

- **Neural networks / deep learning** — Layered networks of simple units that learn complex, non-linear patterns from data. *Used for: image recognition, language processing, and most large-scale pattern recognition tasks.*
- **Decision trees & ensembles** (random forests, gradient boosting) — Learn a series of if/then splits, often combining many trees for accuracy. *Used for: tabular data prediction, situations requiring interpretability, structured/business data.*
- **Support vector machines** — Find the boundary that best separates classes of data with maximum margin. *Used for: classification tasks, especially with clear margins and moderate-sized datasets.*
- **Regression analysis** — Models the relationship between input variables and a continuous (or categorical, for logistic) outcome. *Used for: forecasting, trend analysis, understanding variable relationships.*

## Unsupervised Learning

Techniques that find structure in data without labeled outcomes.

- **Clustering** (k-means, hierarchical) — Groups similar data points together without predefined categories. *Used for: customer segmentation, anomaly detection, exploratory data analysis.*
- **Dimensionality reduction** (PCA, autoencoders) — Compresses data into fewer variables while preserving important structure. *Used for: visualization, noise reduction, feature extraction before other modeling.*
- **Association rule learning** — Finds relationships between variables in large datasets. *Used for: market basket analysis ("customers who bought X also bought Y").*

## Reinforcement Learning

Techniques where an agent learns by interacting with an environment and receiving rewards.

- **Value-based / policy-based RL** — Learns which actions maximize long-term reward through trial and error. *Used for: game playing, robotics, resource allocation, sequential decision-making.*
- **Multi-armed bandits** — A simplified RL problem: balancing exploration of unknown options against exploiting known good ones. *Used for: online advertising, recommendation systems, clinical trial design.*

## Symbolic / Logic-Based Reasoning

Techniques that manipulate explicit rules and symbols rather than learning from data.

- **Expert / rule-based systems** — Encode human expert knowledge as explicit if/then rules. *Used for: diagnostic systems, business rule engines, early AI applications.*
- **Constraint satisfaction** — Finds values for variables that satisfy a set of constraints. *Used for: scheduling, resource allocation, puzzle-solving (e.g., Sudoku).*
- **Fuzzy logic** — Allows reasoning with degrees of truth rather than strict true/false. *Used for: control systems (thermostats, washing machines), situations with vague or continuous categories.*

## Graphical / Structured Models

Techniques that explicitly represent relationships between variables as a graph.

- **Bayesian networks** — Directed graphs showing probabilistic dependencies between variables. *Used for: diagnosis, risk assessment, causal reasoning.*
- **Markov random fields / CRFs** — Undirected graphical models capturing dependencies without assuming a fixed direction of influence. *Used for: image segmentation, labeling sequential data (e.g., named entity recognition).*
- **Graph neural networks** — Neural networks that operate directly on graph-structured data. *Used for: social network analysis, molecule/drug discovery, recommendation systems.*

---

A useful lens across all of these: **probabilistic/statistical and graphical models** are mainly about *representing* uncertainty and relationships; **search/optimization and evolutionary methods** are about *finding* good solutions; **supervised/unsupervised/reinforcement learning** are about *learning patterns from data or experience*; and **symbolic methods** are about *reasoning with explicit rules*. Many real systems combine several of these (e.g., deep RL uses neural networks *and* the RL paradigm; MCMC uses Monte Carlo *within* Bayesian inference).