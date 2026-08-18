# Rewritten AI & ML Technique Definitions

These rewritten, junior-friendly descriptions mirror the entries in `llm/claude-input.md`. Each entry is about 100 words, highlights the essence of the technique, and calls out how it differs from nearby patterns so you can reuse the note later.

---

## 1. Probabilistic / Statistical Reasoning

### Bayesian Inference (`bayesian-inference`)
Bayesian inference is a way to update what you believe about something when you get new data. Start with a prior (your initial guess), observe new evidence, and combine them to produce a posterior (an improved guess). For a junior programmer, think of it like updating a probability score for a hypothesis each time you get a new test result. Unlike frequentist methods like maximum likelihood (which only use current data), Bayesian methods explicitly include prior beliefs and give a distribution over possibilities, which makes them useful when data are scarce or when you want a measure of uncertainty.

### Markov Chain (`markov-chain`)
A Markov chain models a process that moves through states step by step where each step depends only on the current state, not the full past. Practically, it's like a simple rule that says “given where I am now, here are the chances of moving to each next place.” This differs from more complex sequence models (like hidden Markov models) because a plain Markov chain assumes you can observe the states directly and don't need to infer hidden information. Use it when the "memory" of the system is limited to the present.

### Hidden Markov Model (`hidden-markov-model`)
A Hidden Markov Model (HMM) is like a Markov chain but with a twist: you can't see the true underlying states directly. Instead, you see noisy observations that depend on those hidden states. HMMs combine a state-transition model (how states evolve) with an observation model (how states produce outputs) and use algorithms to infer the most likely hidden states. For a junior programmer, HMMs are useful for sequence problems where the true cause is latent, e.g., speech recognition. They differ from plain Markov chains by requiring inference over unobserved variables.

### Markov Decision Process (`markov-decision-process`)
A Markov Decision Process (MDP) formalizes decision-making under uncertainty: states, actions, transition probabilities, and rewards. An agent chooses actions to maximize expected cumulative reward over time, balancing immediate gains with long-term benefits. This differs from passive Markov chains because an MDP includes deliberate choices (actions) and a reward signal — it's the foundation of many reinforcement learning methods. Think of it as a game engine where you design policies (action rules) to get the best score given stochastic dynamics.

### Monte Carlo Method (`monte-carlo-method`)
Monte Carlo methods estimate answers by sampling randomly and averaging results. If a problem is too complex to solve exactly, you can simulate many random trials and use the distribution of outcomes to approximate quantities like probabilities or integrals. For junior programmers, imagine estimating π by throwing darts at a square and counting how many land inside a circle. Monte Carlo differs from exact analytic solvers and from optimization methods: it's about statistical approximation using randomness rather than deterministic equations.

### Markov Chain Monte Carlo (`markov-chain-monte-carlo`)
Markov Chain Monte Carlo (MCMC) builds a Markov chain whose equilibrium distribution matches a complex probability distribution you want to sample from. You run the chain long enough and collect samples that approximate the target distribution. For junior programmers, MCMC is handy when direct sampling is hard; it uses local moves to explore probability space. Unlike simple Monte Carlo, which samples independently, MCMC samples are correlated but allow exploration of high-dimensional distributions that would otherwise be infeasible.

### Gaussian Process (`gaussian-process`)
A Gaussian Process (GP) is a way to model unknown functions probabilistically. Instead of learning a single curve, a GP gives a distribution over possible functions that fit the data, and it provides both predictions and uncertainty estimates for any input. For junior programmers, think of a GP as a flexible, Bayesian regression method that tells you not only the predicted value but also how confident it is. GPs differ from parametric models (like simple linear regression) by being nonparametric: complexity grows with data instead of being fixed by a small set of parameters.

### Kalman Filter (`kalman-filter`)
A Kalman Filter estimates the hidden state of a system that changes over time from noisy measurements. It alternates between prediction (projecting the state forward) and update (correcting with new observations) using linear algebra and Gaussian assumptions. For a junior programmer, use it when you need a real-time estimate of a moving target (like position from noisy sensors). It differs from batch methods because it works online step-by-step and assumes linear-Gaussian dynamics; if the system is non-linear, extended or unscented variants are used.

### Maximum Likelihood Estimation (`maximum-likelihood-estimation`)
Maximum Likelihood Estimation (MLE) finds parameter values that make the observed data most probable under a chosen model. You write a likelihood function and optimize it to get point estimates. Think of tuning model knobs until the model would most likely have produced your data. MLE differs from Bayesian methods by not using priors or producing full posterior distributions — it provides a single best-fit answer and is often simpler computationally.

### Regression Analysis (`regression-analysis`)
Regression analysis models the relationship between input variables and an output you want to predict. It ranges from simple linear regression to more complex generalized models. For a junior programmer, regression is how you turn historic examples into a function you can call to predict future outcomes. It differs from classification (predicting categories) and from nonparametric techniques (like Gaussian processes) in how the model is structured and what assumptions are made about the form of the relationship.

---

## 2. Search & Optimization

### Gradient Descent (`gradient-descent`)
Gradient Descent is an iterative optimization algorithm that nudges parameters in the direction that reduces error the fastest, measured by the gradient. It's the workhorse behind training many machine learning models, especially neural networks. For juniors, imagine rolling downhill on the loss surface toward a valley representing better solutions. It differs from global search methods (like simulated annealing or evolutionary algorithms) because it uses local slope information and typically finds a local minimum — not necessarily the global best.

### Simulated Annealing (`simulated-annealing`)
Simulated Annealing searches for good solutions by making random changes and sometimes accepting worse solutions early on, then slowly reducing that randomness. The idea mirrors physical annealing where cooling lets a material settle into a low-energy state. For a junior programmer, it's a way to escape local optima by accepting occasional bad moves, unlike pure hill-climbing which only accepts improvements. It differs from gradient-based methods because it's derivative-free and can jump across the search space more freely.

### A* Search Algorithm (`a-star-search`)
A* is a pathfinding algorithm that finds the least-cost path between nodes by combining the cost so far with a heuristic estimate of remaining cost. It is efficient and optimal when the heuristic is admissible (never overestimates). For junior programmers, visualize expanding nodes in a grid while using a guess for distance-to-go; A* prioritizes nodes that look promising. It differs from uninformed searches (like Dijkstra) by using heuristics to guide the search and from local optimizers that don't guarantee shortest overall paths.

### Hill Climbing (`hill-climbing`)
Hill Climbing repeatedly moves from a solution to a better neighboring solution until no improvement is found. It's simple and fast but can get stuck in local optima. For a junior programmer, think of taking small steps uphill until the slope levels out. It differs from stochastic or global methods (like simulated annealing or genetic algorithms) because it accepts only improvements and does not explore broadly, so it's best for smooth landscapes or when combined with restarts.

### Tabu Search (`tabu-search`)
Tabu Search enhances local search by keeping a short-term memory (the tabu list) of recently visited solutions or moves to avoid cycling back. This lets the search explore new areas and escape local optima. For juniors, imagine keeping a short "do not revisit" list while trying neighboring changes, which helps avoid loops. It differs from plain hill-climbing by actively forbidding recent moves, and from population-based methods by focusing on a single evolving solution rather than many candidates.

### Dynamic Programming (`dynamic-programming`)
Dynamic Programming (DP) solves complex problems by breaking them into overlapping subproblems and reusing solved sub-results (memoization). It turns exponential problems into polynomial-time ones when overlapping structure exists. For junior programmers, think of computing Fibonacci numbers once and saving them instead of recalculating. DP differs from greedy or divide-and-conquer methods by exploiting repeated subproblems and optimal substructure; it's deterministic and exact when applicable.

### Linear Programming (`linear-programming`)
Linear Programming (LP) finds the best outcome for a linear objective function subject to linear constraints. It's widely used for resource allocation and scheduling problems. For junior programmers, consider it as solving a system that asks "maximize profit" with limited resources, where everything scales linearly. LP differs from non-linear optimization or integer programming because of its linearity and the availability of powerful polynomial-time solvers; if variables must be integers, the problem becomes harder (integer programming).

---

## 3. Evolutionary & Nature-Inspired Computation

### Genetic Algorithm (`genetic-algorithm`)
Genetic Algorithms (GAs) evolve a population of candidate solutions using selection, crossover, and mutation. Over generations, better solutions tend to survive and recombine. For junior programmers, picture many solutions as a population of strings that mate and mutate so they gradually improve. GAs differ from gradient methods because they don't use derivatives — they explore via population diversity and randomized operators, which helps on rugged or discrete search spaces where gradients don't exist.

### Genetic Programming (`genetic-programming`)
Genetic Programming (GP) extends GAs by evolving computer programs or expressions rather than fixed-length candidate vectors. Solutions are trees or code fragments that are recombined and mutated. Think of breeding small programs until one solves your task. GP differs from GAs by producing executable structures (trees of operations) and is useful when the solution form itself is unknown; it's heavier computationally but flexible for symbolic problems.

### Particle Swarm Optimization (`particle-swarm-optimization`)
Particle Swarm Optimization (PSO) moves a swarm of particles through the search space where each particle adjusts its position based on its own experience and that of its neighbors. For junior programmers, imagine many points flying over the landscape, sharing information about the best places they've seen. PSO differs from evolutionary algorithms by using velocity updates and social sharing rather than crossover/mutation; it's often simpler to tune and works well for continuous optimization.

### Ant Colony Optimization (`ant-colony-optimization`)
Ant Colony Optimization (ACO) simulates ants laying pheromones on paths: good routes get reinforced and become more likely to be followed. Over time, the colony converges to efficient paths for routing and combinatorial problems. Think of many simple agents leaving traces that bias future choices. ACO differs from single-solution local search by using collective indirect communication (stigmergy) and is particularly well-suited to routing and combinatorial optimization.

### Evolution Strategy (`evolution-strategy`)
Evolution Strategies (ES) are evolutionary methods focused on optimizing continuous parameters and often adapt mutation scales automatically. They evolve a small population and tune how much they explore as they go. For junior programmers, picture gradually adjusting both candidate solutions and how wildly you mutate them to balance exploration and refinement. ES differs from simple GAs by emphasizing self-adaptation for mutation rates and being particularly effective for continuous, real-valued optimization tasks.

---

## 4. Supervised Learning

### Artificial Neural Network (`artificial-neural-network`)
An Artificial Neural Network (ANN) is a layered set of simple computation units (neurons) that learn complex mappings from inputs to outputs by adjusting weights using data. For junior programmers, think of it as a function approximator that learns patterns through examples. ANNs can model highly non-linear relationships and differ from simpler algorithms (like linear regression or decision trees) by requiring more data and compute but offering greater flexibility. Architectures and training choices (depth, activation, optimization) determine their behavior and suitability.

### Decision Tree Learning (`decision-tree-learning`)
Decision Trees split data by asking sequential yes/no questions to reach a prediction. Each branch tests a feature; leaves hold predictions. For juniors, visualize a flowchart that routes each example down to a class or value. Trees differ from black-box models because they are interpretable and easy to inspect. Compared to ensemble methods (random forest, boosting), a single tree is simpler and more prone to overfitting, but it's fast and transparent.

### Random Forest (`random-forest`)
Random Forest builds many decision trees on random subsets of data and features, then averages their predictions. This reduces overfitting and typically improves accuracy compared to a single tree. For junior programmers, imagine asking many slightly different experts and taking a majority vote. Random Forest differs from boosting because it trains trees independently and aggregates, while boosting adds trees sequentially to correct previous errors.

### Gradient Boosting (`gradient-boosting`)
Gradient Boosting builds a sequence of weak learners (often shallow trees), where each new model focuses on correcting errors made by the previous ensemble. Over many iterations you get a strong predictor. Think of many small trees each learning the residual mistakes and cumulatively improving predictions. It differs from random forests by training sequentially and typically reaching higher accuracy at the cost of more careful tuning and sensitivity to overfitting.

### Support Vector Machine (`support-vector-machine`)
Support Vector Machines (SVMs) try to find the boundary that separates classes with the largest margin. They can use kernels to operate in transformed feature spaces for non-linear separation. For a junior programmer, picture fitting a fence that leaves the widest gap between classes. SVMs differ from probabilistic classifiers (like logistic regression) by focusing on margin maximization and from tree-based methods in how they handle feature interactions and generalization.

### k-Nearest Neighbors (`k-nearest-neighbors`)
k-Nearest Neighbors (k-NN) classifies new points based on the labels of the k closest training examples. It's simple and nonparametric: store the data and use distance at query time. Think of asking the nearest neighbors what label they have and going with the majority. k-NN differs from models that summarize data into parameters (like SVMs or neural networks) because it keeps raw examples and can be slow at prediction time but very flexible.

### Naive Bayes Classifier (`naive-bayes-classifier`)
Naive Bayes is a fast probabilistic classifier that assumes features are independent given the class. Despite this strong assumption, it often works well in practice (e.g., text classification). For junior programmers, think of multiplying simple likelihoods for each feature and picking the class with the highest score. It differs from more expressive probabilistic models by trading modeling fidelity for speed and simplicity.

### Linear Discriminant Analysis (`linear-discriminant-analysis`)
Linear Discriminant Analysis (LDA) finds linear combinations of features that separate classes best and models class-conditional Gaussian distributions. For juniors, imagine projecting data onto a line where classes become as distinct as possible. LDA differs from SVMs and logistic regression by its probabilistic generative assumptions and closed-form solutions — when those assumptions hold, LDA can be very effective and interpretable.

---

## 5. Deep Learning Architectures

### Convolutional Neural Network (`convolutional-neural-network`)
Convolutional Neural Networks (CNNs) are specialized ANNs that scan local patterns across structured inputs like images. Convolution layers detect local features (edges, textures) and pooling reduces spatial size while preserving signals. For junior programmers, think of sliding small filters over an image and learning which patterns matter. CNNs differ from dense networks by exploiting spatial locality and parameter sharing, making them ideal for images and grid-like data.

### Recurrent Neural Network (`recurrent-neural-network`)
Recurrent Neural Networks (RNNs) process sequences by passing information from one step to the next, allowing the network to use past inputs when predicting future ones. For juniors, imagine a loop that carries a hidden memory forward through time. RNNs differ from feedforward networks by their temporal dynamics; compared to transformers, basic RNNs struggle with long-range dependencies and training stability.

### Long Short-Term Memory (`long-short-term-memory`)
LSTM networks are a type of RNN designed to remember information over longer sequences using gated mechanisms that control information flow. For junior programmers, think of gates that decide what to keep, forget, or output, so the model can learn long-term dependencies. LSTMs differ from vanilla RNNs by addressing vanishing gradients and from transformers by being sequential rather than relying on global attention.

### Transformer (`transformer`)
Transformers use attention mechanisms to let every part of the input interact directly with every other part, enabling parallel computation and effective handling of long-range dependencies. For juniors, imagine each token in a sequence asking "how much should I listen to each other token?" Transformers differ from RNNs by avoiding recurrence and from CNNs by using attention instead of local filters; this design underpins modern large language models.

### Generative Adversarial Network (`generative-adversarial-network`)
A GAN trains two networks: a generator that creates fake samples and a discriminator that tries to tell real from fake. They compete until the generator produces convincing outputs. For junior programmers, picture a forger improving to fool a detective. GANs differ from likelihood-based generative models (like VAEs) because they don't optimize an explicit probability; training can be unstable but often yields sharp, realistic samples.

### Diffusion Model (`diffusion-model`)
Diffusion models learn to generate data by reversing a process that gradually corrupts data with noise. The model learns to denoise step by step until a clean sample emerges. Think of learning a multi-step cleanup routine: start with noise and iteratively remove it to create data. Diffusion models differ from GANs by optimizing likelihood-like objectives and tend to be more stable, though often slower at sampling.

### Autoencoder (`autoencoder`)
An Autoencoder compresses input into a compact latent representation and decodes it to reconstruct the original. It's used for dimensionality reduction, denoising, and representation learning. For juniors, picture an encoder that translates data into a smaller code and a decoder that reconstructs it; training minimizes reconstruction error. Autoencoders differ from supervised models because they don't need labels, and from VAEs because standard autoencoders don't impose probabilistic structure on the latent space.

---

## 6. Unsupervised Learning

### k-Means Clustering (`k-means-clustering`)
k-Means divides data into k clusters by alternating assignment to the nearest center and updating centers to the mean of assigned points. For juniors, imagine grouping points by repeatedly putting them into the nearest cluster center until things stabilize. k-Means differs from density-based methods (like DBSCAN) because it assumes spherical clusters and a fixed k, making it fast but less flexible for irregular shapes.

### Hierarchical Clustering (`hierarchical-clustering`)
Hierarchical Clustering builds a tree of clusters either by merging small clusters upward or splitting large ones downward. For junior programmers, think of forming a family tree of groups where you can cut the tree at any level to get a clustering. It differs from flat methods (like k-means) because it provides multi-scale structure and doesn't force a fixed number of clusters upfront.

### DBSCAN (`dbscan`)
DBSCAN groups points that are densely packed and marks isolated points as noise, without specifying the number of clusters beforehand. For juniors, imagine drawing circles and seeing which points have enough neighbors — dense regions become clusters. DBSCAN differs from k-means by handling irregular cluster shapes and identifying outliers, but it requires choosing distance and density thresholds carefully.

### Principal Component Analysis (`principal-component-analysis`)
PCA reduces dimensionality by finding directions (principal components) where data varies most, projecting data into a lower-dimensional space while preserving as much variance as possible. For junior programmers, picture rotating the data to find the best axes summarizing it. PCA differs from non-linear methods (like t-SNE) by being linear and interpretable, and it's often used as a preprocessing step.

### t-SNE (`t-sne`)
t-SNE is a technique for visualizing high-dimensional data by embedding it into 2 or 3 dimensions while preserving local similarities. Think of squashing high-dimensional structure into a scatterplot that keeps neighbors together. t-SNE differs from PCA by focusing on local structure for visualization (not global variance) and isn't suitable as a general-purpose dimensionality reduction for downstream modeling.

### Self-Organizing Map (`self-organizing-map`)
A Self-Organizing Map (SOM) is a neural-network-like method that maps high-dimensional data onto a low-dimensional grid while preserving topology: similar inputs end up near each other. For juniors, picture arranging nodes on a grid so that they represent different clusters of the data. SOMs differ from other clustering and embedding techniques by providing a structured grid that can be visualized and interpreted.

### Association Rule Learning (`association-rule-learning`)
Association Rule Learning finds rules of the form "if items A and B appear, item C often appears too" — common in market-basket analysis. For juniors, imagine mining transaction records to find which products are frequently bought together. It differs from clustering and classification because it discovers co-occurrence rules rather than partitions or labels, and it works well for transactional or binary feature data.

---

## 7. Reinforcement Learning

### Q-Learning (`q-learning`)
Q-Learning is a model-free reinforcement learning algorithm that learns the value (Q) of taking actions in states by bootstrapping from observed rewards and future value estimates. Think of updating a table that scores how good each action is in each situation through trial and error. Q-Learning differs from policy gradient methods by learning value estimates directly and from model-based approaches by not requiring a model of environment dynamics.

### Temporal Difference Learning (`temporal-difference-learning`)
Temporal Difference (TD) Learning updates value estimates using the difference between successive predictions — it learns from incomplete episodes by bootstrapping. For junior programmers, imagine improving your estimate of running total rewards step-by-step, using your current prediction to update the previous one. TD differs from Monte Carlo methods by updating before the final outcome and from supervised learning by relying on reward signals from interaction.

### Policy Gradient Method (`policy-gradient-method`)
Policy Gradient methods directly optimize the agent's action-selection strategy by estimating gradients of expected reward with respect to policy parameters and taking gradient steps. For juniors, picture nudging the policy toward actions that led to higher rewards. These methods differ from value-based ones (like Q-learning) as they optimize the policy directly and can naturally handle continuous action spaces.

### Multi-Armed Bandit (`multi-armed-bandit`)
The Multi-Armed Bandit formalizes the exploration-vs-exploitation trade-off in a simplified one-step setting: choose among several options with unknown rewards and learn which is best. Think of many slot machines (arms) where you must balance trying new arms against exploiting the best-known one. It differs from full RL because there is no state transition — decisions are single-step but capture the core challenge of learning under uncertainty.

---

## 8. Symbolic / Logic-Based Reasoning

### Expert System (`expert-system`)
An Expert System encodes human expertise as explicit if-then rules and uses rule engines to make decisions or diagnoses. For junior programmers, think of a large set of condition-action pairs that emulate an expert's reasoning process. Expert systems differ from statistical ML because they rely on explicit rules designed by humans rather than learned from data — they are interpretable but brittle when rules don't cover edge cases.

### Constraint Satisfaction Problem (`constraint-satisfaction-problem`)
A Constraint Satisfaction Problem (CSP) asks for values of variables that satisfy all constraints simultaneously (like Sudoku). For juniors, picture setting variable values while checking many rules until everything is consistent. CSP techniques differ from optimization because they focus on feasibility rather than optimizing a numeric objective and often use search with pruning.

### Fuzzy Logic (`fuzzy-logic`)
Fuzzy Logic allows reasoning with degrees of truth instead of strict true/false values, enabling rules like "if temperature is somewhat high, then reduce heating moderately." For junior programmers, think of smooth thresholds and graded rules instead of binary ones. Fuzzy systems differ from classical logic-based systems by modeling vagueness explicitly, making them useful in control systems and human-centric rules.

### Automated Theorem Proving (`automated-theorem-proving`)
Automated Theorem Proving uses formal logic and search strategies to prove or disprove mathematical statements automatically. For juniors, imagine a solver that applies inference rules systematically to derive conclusions from axioms. It differs from heuristic or statistical methods by operating on symbolic, provable correctness rather than probabilistic guesses.

### Case-Based Reasoning (`case-based-reasoning`)
Case-Based Reasoning solves new problems by finding and adapting solutions that worked in similar past cases. For junior programmers, think of retrieving an old ticket with a similar bug and tweaking that solution for the new one. It differs from rule-based systems by relying on concrete past examples instead of abstracted rules, and from purely statistical methods by emphasizing adaptation of discrete cases.

### Semantic Network (`semantic-network`)
A Semantic Network represents knowledge as nodes (concepts) connected by labeled relationships, forming a graph you can query and reason over. For juniors, picture a mind map where concepts link with typed edges like "is-a" or "part-of." It differs from tabular data representations by emphasizing relationships and from purely statistical embeddings by being explicit and interpretable.

---

## 9. Graphical / Structured Probabilistic Models

### Bayesian Network (`bayesian-network`)
A Bayesian Network is a directed acyclic graph that encodes probabilistic dependencies between variables. Each node has a conditional probability table describing how it depends on its parents. Think of a cause-effect diagram with probabilities that you can use to compute posterior beliefs. Bayesian networks differ from flat probabilistic models by making conditional independencies explicit, enabling efficient reasoning about causality and interventions.

### Markov Random Field (`markov-random-field`)
A Markov Random Field (MRF) models variables with an undirected graph where each variable depends on its neighbors; it's suited for spatial or relational data where directionality is not natural. For juniors, imagine a grid where each cell's value is influenced by adjacent cells. MRFs differ from Bayesian networks by being undirected and focusing on local compatibility rather than parent-child causal structure.

### Conditional Random Field (`conditional-random-field`)
A Conditional Random Field (CRF) models the conditional distribution of label sequences given inputs, capturing dependencies between neighboring labels (useful in sequence labeling). For junior programmers, think of labeling a sentence where the label for a word depends on nearby labels as well as the input features. CRFs differ from HMMs by being discriminative (modeling p(labels|inputs) directly) and from simple classifiers by modeling structured outputs jointly.

### Graph Neural Network (`graph-neural-network`)
Graph Neural Networks (GNNs) are neural architectures that operate on graphs by passing messages between nodes and aggregating neighbor information to compute node or graph representations. For juniors, visualize nodes exchanging information with their neighbors then updating their own state. GNNs differ from regular neural nets by natively handling graph structure and from probabilistic graphical models by being learned, differentiable models rather than explicit probabilistic encodings.

---

## Note for Later Use

I created junior-friendly rewrites emphasizing what makes each pattern distinct compared to related approaches. Save this file `llm/claude-input-rewritten.md` as the working canonical set for content updates or CMS import. I will also store a short memory note for quick reference.
