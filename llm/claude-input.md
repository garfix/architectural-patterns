# AI & Machine Learning Technique Patterns

A reference list of canonical techniques, grouped by paradigm, for building individual pattern pages (in the spirit of architectural-patterns.net).

Each entry: **Name** | `slug` | Canonical reference | Layman description

---

## 1. Probabilistic / Statistical Reasoning
*Techniques that represent uncertainty explicitly and reason with probabilities.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Bayesian Inference | `bayesian-inference` | [Wikipedia](https://en.wikipedia.org/wiki/Bayesian_inference) | Updates the probability of a belief as new evidence comes in, by combining prior knowledge with observed data. |
| Markov Chain | `markov-chain` | [Wikipedia](https://en.wikipedia.org/wiki/Markov_chain) | Models a system as a sequence of states where the next state depends only on the current one, not the full history. |
| Hidden Markov Model | `hidden-markov-model` | [Wikipedia](https://en.wikipedia.org/wiki/Hidden_Markov_model) | A Markov chain where the true states are unobserved and must be inferred from observable outputs. |
| Markov Decision Process | `markov-decision-process` | [Wikipedia](https://en.wikipedia.org/wiki/Markov_decision_process) | A framework for decision-making where outcomes are partly random and partly under the control of an agent choosing actions. |
| Monte Carlo Method | `monte-carlo-method` | [Wikipedia](https://en.wikipedia.org/wiki/Monte_Carlo_method) | Uses repeated random sampling to estimate answers to problems that are too complex to solve exactly. |
| Markov Chain Monte Carlo | `markov-chain-monte-carlo` | [Wikipedia](https://en.wikipedia.org/wiki/Markov_chain_Monte_Carlo) | Draws samples from a complicated probability distribution by constructing a Markov chain that gradually converges to it. |
| Gaussian Process | `gaussian-process` | [Wikipedia](https://en.wikipedia.org/wiki/Gaussian_process) | A probabilistic model over functions that produces predictions along with a measure of confidence in them. |
| Kalman Filter | `kalman-filter` | [Wikipedia](https://en.wikipedia.org/wiki/Kalman_filter) | Estimates the true state of a moving or changing system from noisy, incomplete measurements over time. |
| Maximum Likelihood Estimation | `maximum-likelihood-estimation` | [Wikipedia](https://en.wikipedia.org/wiki/Maximum_likelihood_estimation) | Finds the parameter values that make the observed data most probable under a chosen model. |
| Regression Analysis | `regression-analysis` | [Wikipedia](https://en.wikipedia.org/wiki/Regression_analysis) | Models the relationship between input variables and an outcome, used to predict or explain that outcome. |

---

## 2. Search & Optimization
*Techniques for finding the best (or a good-enough) solution in a large space of possibilities.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Gradient Descent | `gradient-descent` | [Wikipedia](https://en.wikipedia.org/wiki/Gradient_descent) | Iteratively adjusts parameters in the direction that most reduces error, used to train most modern models. |
| Simulated Annealing | `simulated-annealing` | [Wikipedia](https://en.wikipedia.org/wiki/Simulated_annealing) | Searches for a good solution by allowing occasional worse moves early on, cooling down over time to settle into a strong result. |
| A* Search Algorithm | `a-star-search` | [Wikipedia](https://en.wikipedia.org/wiki/A*_search_algorithm) | Finds the shortest path between points by combining actual cost so far with an estimate of remaining cost. |
| Hill Climbing | `hill-climbing` | [Wikipedia](https://en.wikipedia.org/wiki/Hill_climbing) | Repeatedly moves to a better neighboring solution until no improvement can be found. |
| Tabu Search | `tabu-search` | [Wikipedia](https://en.wikipedia.org/wiki/Tabu_search) | A local search method that avoids revisiting recently tried solutions to escape getting stuck. |
| Dynamic Programming | `dynamic-programming` | [Wikipedia](https://en.wikipedia.org/wiki/Dynamic_programming) | Solves complex problems by breaking them into overlapping subproblems and reusing solutions to those subproblems. |
| Linear Programming | `linear-programming` | [Wikipedia](https://en.wikipedia.org/wiki/Linear_programming) | Finds the best outcome (e.g. maximum profit or minimum cost) in a model with linear relationships and constraints. |

---

## 3. Evolutionary & Nature-Inspired Computation
*Techniques that search for solutions by imitating biological or collective natural processes.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Genetic Algorithm | `genetic-algorithm` | [Wikipedia](https://en.wikipedia.org/wiki/Genetic_algorithm) | Evolves a population of candidate solutions through selection, crossover, and mutation, mimicking natural selection. |
| Genetic Programming | `genetic-programming` | [Wikipedia](https://en.wikipedia.org/wiki/Genetic_programming) | Like a genetic algorithm, but evolves actual computer programs or expressions rather than fixed-format solutions. |
| Particle Swarm Optimization | `particle-swarm-optimization` | [Wikipedia](https://en.wikipedia.org/wiki/Particle_swarm_optimization) | Moves a swarm of candidate solutions through the search space, each influenced by its own and its neighbors' best finds. |
| Ant Colony Optimization | `ant-colony-optimization` | [Wikipedia](https://en.wikipedia.org/wiki/Ant_colony_optimization_algorithms) | Simulates ants laying and following pheromone trails to find efficient paths, useful for routing problems. |
| Evolution Strategy | `evolution-strategy` | [Wikipedia](https://en.wikipedia.org/wiki/Evolution_strategy) | An evolutionary optimization method that adapts the mutation size itself as it searches, common in continuous parameter tuning. |

---

## 4. Supervised Learning
*Techniques that learn a mapping from inputs to known outputs.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Artificial Neural Network | `artificial-neural-network` | [Wikipedia](https://en.wikipedia.org/wiki/Neural_network_(machine_learning)) | A layered network of simple computing units that learns complex, non-linear patterns from labeled examples. |
| Decision Tree Learning | `decision-tree-learning` | [Wikipedia](https://en.wikipedia.org/wiki/Decision_tree_learning) | Learns a flowchart-like series of yes/no questions that split data into increasingly pure groups. |
| Random Forest | `random-forest` | [Wikipedia](https://en.wikipedia.org/wiki/Random_forest) | Combines many decision trees trained on random subsets of data and averages their predictions for more accuracy. |
| Gradient Boosting | `gradient-boosting` | [Wikipedia](https://en.wikipedia.org/wiki/Gradient_boosting) | Builds a sequence of weak models, each one correcting the errors of the ones before it. |
| Support Vector Machine | `support-vector-machine` | [Wikipedia](https://en.wikipedia.org/wiki/Support_vector_machine) | Finds the boundary that separates classes of data with the widest possible margin between them. |
| k-Nearest Neighbors | `k-nearest-neighbors` | [Wikipedia](https://en.wikipedia.org/wiki/K-nearest_neighbors_algorithm) | Classifies a new data point based on the majority label among its closest neighbors in the training data. |
| Naive Bayes Classifier | `naive-bayes-classifier` | [Wikipedia](https://en.wikipedia.org/wiki/Naive_Bayes_classifier) | A fast probabilistic classifier that assumes input features are independent of each other given the class. |
| Linear Discriminant Analysis | `linear-discriminant-analysis` | [Wikipedia](https://en.wikipedia.org/wiki/Linear_discriminant_analysis) | Finds a linear combination of features that best separates two or more classes. |

---

## 5. Deep Learning Architectures
*Specific neural network designs significant enough to be considered techniques in their own right.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Convolutional Neural Network | `convolutional-neural-network` | [Wikipedia](https://en.wikipedia.org/wiki/Convolutional_neural_network) | A neural network that scans small local patterns (like edges or textures) across an image or grid-like data. |
| Recurrent Neural Network | `recurrent-neural-network` | [Wikipedia](https://en.wikipedia.org/wiki/Recurrent_neural_network) | A neural network with loops that let it carry information forward through a sequence, such as text or time series. |
| Long Short-Term Memory | `long-short-term-memory` | [Wikipedia](https://en.wikipedia.org/wiki/Long_short-term_memory) | A recurrent network design with gates that let it remember or forget information over long sequences. |
| Transformer | `transformer` | [Wikipedia](https://en.wikipedia.org/wiki/Transformer_(deep_learning_architecture)) | A neural network architecture that weighs the relevance of all parts of an input to each other at once, underlying most modern language models. |
| Generative Adversarial Network | `generative-adversarial-network` | [Wikipedia](https://en.wikipedia.org/wiki/Generative_adversarial_network) | Pits two neural networks against each other — one generating fake data, one detecting it — until the generator produces convincing results. |
| Diffusion Model | `diffusion-model` | [Wikipedia](https://en.wikipedia.org/wiki/Diffusion_model) | Learns to generate data by reversing a process that gradually adds noise, starting from noise and denoising step by step. |
| Autoencoder | `autoencoder` | [Wikipedia](https://en.wikipedia.org/wiki/Autoencoder) | A neural network trained to compress data down and then reconstruct it, learning a compact representation in the process. |

---

## 6. Unsupervised Learning
*Techniques that find structure in data without labeled outcomes.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| k-Means Clustering | `k-means-clustering` | [Wikipedia](https://en.wikipedia.org/wiki/K-means_clustering) | Groups data points into a fixed number of clusters by repeatedly assigning points to the nearest cluster center. |
| Hierarchical Clustering | `hierarchical-clustering` | [Wikipedia](https://en.wikipedia.org/wiki/Hierarchical_clustering) | Builds a tree of nested clusters, either by merging small groups upward or splitting large ones downward. |
| DBSCAN | `dbscan` | [Wikipedia](https://en.wikipedia.org/wiki/DBSCAN) | Groups points that are densely packed together and marks isolated points as outliers, without needing to specify cluster count in advance. |
| Principal Component Analysis | `principal-component-analysis` | [Wikipedia](https://en.wikipedia.org/wiki/Principal_component_analysis) | Reduces data to fewer dimensions by finding the directions along which it varies the most. |
| t-SNE | `t-sne` | [Wikipedia](https://en.wikipedia.org/wiki/T-distributed_stochastic_neighbor_embedding) | Compresses high-dimensional data into two or three dimensions for visualization while preserving local similarity. |
| Self-Organizing Map | `self-organizing-map` | [Wikipedia](https://en.wikipedia.org/wiki/Self-organizing_map) | A neural network that arranges itself into a low-dimensional grid, placing similar data near each other, without supervision. |
| Association Rule Learning | `association-rule-learning` | [Wikipedia](https://en.wikipedia.org/wiki/Association_rule_learning) | Discovers "if this, then that" relationships in large datasets, like items frequently bought together. |

---

## 7. Reinforcement Learning
*Techniques where an agent learns by interacting with an environment and receiving rewards.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Q-Learning | `q-learning` | [Wikipedia](https://en.wikipedia.org/wiki/Q-learning) | Learns the value of taking a given action in a given state, purely through trial and error, without a model of the environment. |
| Temporal Difference Learning | `temporal-difference-learning` | [Wikipedia](https://en.wikipedia.org/wiki/Temporal_difference_learning) | Updates predictions using the difference between successive estimates, learning before the final outcome is even known. |
| Policy Gradient Method | `policy-gradient-method` | [Wikipedia](https://en.wikipedia.org/wiki/Policy_gradient_method) | Directly adjusts the agent's decision-making strategy to increase the actions that lead to higher rewards. |
| Multi-Armed Bandit | `multi-armed-bandit` | [Wikipedia](https://en.wikipedia.org/wiki/Multi-armed_bandit) | Balances trying new options against sticking with the best-known option, in a simplified one-step version of reinforcement learning. |

---

## 8. Symbolic / Logic-Based Reasoning
*Techniques that manipulate explicit rules and symbols rather than learning statistically from data.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Expert System | `expert-system` | [Wikipedia](https://en.wikipedia.org/wiki/Expert_system) | Encodes human expert knowledge as a set of explicit if-then rules to make decisions or diagnoses. |
| Constraint Satisfaction Problem | `constraint-satisfaction-problem` | [Wikipedia](https://en.wikipedia.org/wiki/Constraint_satisfaction_problem) | Finds values for a set of variables that simultaneously satisfy all given constraints, like a Sudoku solver. |
| Fuzzy Logic | `fuzzy-logic` | [Wikipedia](https://en.wikipedia.org/wiki/Fuzzy_logic) | Allows reasoning with degrees of truth ("somewhat hot") instead of strict true/false categories. |
| Automated Theorem Proving | `automated-theorem-proving` | [Wikipedia](https://en.wikipedia.org/wiki/Automated_theorem_proving) | Uses formal logic to automatically prove or disprove mathematical statements. |
| Case-Based Reasoning | `case-based-reasoning` | [Wikipedia](https://en.wikipedia.org/wiki/Case-based_reasoning) | Solves new problems by adapting solutions that worked for similar past problems. |
| Semantic Network | `semantic-network` | [Wikipedia](https://en.wikipedia.org/wiki/Semantic_network) | Represents knowledge as a graph of concepts connected by labeled relationships. |

---

## 9. Graphical / Structured Probabilistic Models
*Techniques that explicitly represent dependencies between variables as a graph.*

| Name | Slug | Reference | Description |
|---|---|---|---|
| Bayesian Network | `bayesian-network` | [Wikipedia](https://en.wikipedia.org/wiki/Bayesian_network) | A directed graph showing how variables probabilistically influence each other, useful for reasoning about causes and effects. |
| Markov Random Field | `markov-random-field` | [Wikipedia](https://en.wikipedia.org/wiki/Markov_random_field) | An undirected graph of variables where each one depends on its neighbors, without assuming a direction of influence. |
| Conditional Random Field | `conditional-random-field` | [Wikipedia](https://en.wikipedia.org/wiki/Conditional_random_field) | A structured model that predicts a whole sequence of labels at once, taking neighboring labels into account. |
| Graph Neural Network | `graph-neural-network` | [Wikipedia](https://en.wikipedia.org/wiki/Graph_neural_network) | A neural network that operates directly on graph-structured data, learning from both node features and connections. |

---

### Notes on using this list
- Categories aren't fully mutually exclusive — e.g. deep RL combines paradigms 5 and 7, and MCMC (paradigm 1) is often used to train graphical models (paradigm 9).
- All references point to English Wikipedia articles that exist as of this writing; worth spot-checking URLs before publishing, since article titles occasionally get renamed.
- If you want, I can also produce this as a CSV/JSON for direct import into a CMS.