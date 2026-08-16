<?php

function getCategoryByCode($code) {
    global $categories;

    foreach ($categories as $category) {
        if ($category['code'] == $code) {
            return $category;
        }
    }

    return null;
}

function getPatternByName($name) {
    global $patterns;

    foreach ($patterns as $pattern) {
        if ($pattern['name'] == $name) {
            return $pattern;
        }
    }

    return null;
}
function showHeader($pattern) {
?>

<header class="content">
    <h1><?= $pattern['name'] ?></h1>
    <p><?= isset($p['keywords']) ? $p['keywords'] : "" ?></p>
</header>

<?php
    // Render a concise "How does it work?" section for problem-solving patterns.
    showHowItWorks($pattern);

}

function showHowItWorks($pattern) {
    global $categories;

    // List of categories considered 'new problem solving' (as added in data.php)
    $problemCategories = [
        CAT_PROBABILISTIC,
        CAT_SEARCH_OPTIMIZATION,
        CAT_EVOLUTIONARY,
        CAT_SUPERVISED_LEARNING,
        CAT_DEEP_LEARNING,
        CAT_UNSUPERVISED_LEARNING,
        CAT_REINFORCEMENT_LEARNING,
        CAT_SYMBOLIC_REASONING,
        CAT_GRAPHICAL_MODELS,
    ];

    $name = $pattern['name'];

    // Determine if this pattern is listed under any problem-solving category
    $isProblemSolving = false;
    foreach ($categories as $cat) {
        if (in_array($cat['code'], $problemCategories)) {
            if (isset($cat['patterns']) && in_array($name, $cat['patterns'])) {
                $isProblemSolving = true;
                break;
            }
        }
    }

    if (! $isProblemSolving) {
        return;
    }

    // Short, medior-developer-focused explanations per pattern name
    $explanations = [
        // Probabilistic
        'Bayesian Inference' => 'Combine prior beliefs and observed data via Bayes\' rule to update probabilities incrementally as evidence arrives. Typically implemented by maintaining a prior, computing a likelihood for new data, and normalizing to produce a posterior.',
        'Markov Chain' => 'Model states and transition probabilities between them. Analysis is by transition matrices or simulation; steady-state behaviour follows from repeated multiplication or eigenvector methods.',
        'Hidden Markov Model' => 'Use latent (hidden) states with observable emissions; inference uses the Forward–Backward and Viterbi algorithms to compute state probabilities and most likely state sequences.',
        'Markov Decision Process' => 'Formalise sequential decision problems with states, actions, rewards and transition probabilities; solve with dynamic programming (value / policy iteration) or RL methods.',
        'Monte Carlo Method' => 'Estimate quantities by random sampling; average many independent simulations to approximate expectations or integrals.',
        'Markov Chain Monte Carlo' => 'Construct a Markov chain whose stationary distribution is the target distribution, then sample after burn-in to approximate expectations.',
        'Gaussian Process' => 'Place a prior directly over functions using covariance kernels; prediction is Gaussian with mean and covariance computed from training data.',
        'Kalman Filter' => 'Recursive Bayesian estimator for linear Gaussian state-space models — alternate predict and update steps to maintain a Gaussian estimate of state and uncertainty.',
        'Maximum Likelihood Estimation' => 'Choose parameters that maximise the likelihood of observed data; often solved by closed-form for simple models or numeric optimisation (gradient methods) otherwise.',
        'Regression Analysis' => 'Fit a function (linear or non-linear) to explain the relationship between inputs and outputs; validate with held-out data and inspect residuals.',

        // Search & optimization
        'A* Search Algorithm' => 'Perform best-first graph search guided by an admissible heuristic: f(n)=g(n)+h(n). Guarantees optimal path if the heuristic is admissible and consistent.',
        'Gradient Descent' => 'Iteratively update parameters in direction of negative gradient to minimise an objective; tune step size (learning rate) and use variants (momentum, Adam) for stability.',
        'Simulated Annealing' => 'Stochastic hill-climbing with occasional uphill moves controlled by a temperature schedule to escape local optima and approach a global optimum.',
        'Dynamic Programming' => 'Break problems into overlapping subproblems, cache results (memoisation) or build bottom-up tables to avoid exponential recomputation.',

        // Evolutionary
        'Genetic Algorithm' => 'Maintain a population of candidate solutions; iterate selection, crossover and mutation operators driven by a fitness function to evolve better solutions.',
        'Ant Colony Optimization' => 'Simulate pheromone-laying agents that probabilistically prefer shorter/better paths; pheromone evaporation and reinforcement guide convergence to good solutions.',
        'Evolution Strategy' => 'Population-based numerical optimisation focused on mutation-selection of real-valued vectors, using self-adaptive mutation strengths.',

        // Supervised / Deep learning
        'Artificial Neural Network' => 'Compose parameterised layers of differentiable functions and train end-to-end by minimising a loss with gradient-based optimisation (backpropagation).',
        'Convolutional Neural Network' => 'Use convolutional layers to learn local spatial features; apply pooling/strides and fully-connected heads for classification or regression.',
        'Transformer' => 'Use attention mechanisms to compute context-aware representations across sequences, enabling parallel training and strong sequence modelling performance.',

        // Unsupervised
        'k-Means Clustering' => 'Iteratively assign points to nearest cluster centroids and recompute centroids until convergence; sensitive to initialization and number of clusters.',
        'DBSCAN' => 'Density-based clustering that groups points by neighborhood density, robust to arbitrary shapes and able to detect noise/outliers.',

        // Reinforcement
        'Q-Learning' => 'Learn an action-value function Q(s,a) by bootstrapping: update estimates using observed rewards and max over next-state actions; can be made tabular or approximated with function approximators.',

        // Symbolic
        'Expert System' => 'Encode domain knowledge as rules and an inference engine that applies them to facts; suitable for transparent decision logic with explainability.',

        // Graphical models
        'Bayesian Network' => 'Factorise a joint distribution via a DAG; use local conditional probability tables for efficient inference (exact or approximate).',
    ];

    $text = isset($explanations[$name]) ? $explanations[$name] : null;
    if (! $text) {
        $text = 'This pattern is used to solve a class of problems by applying its core mechanism; see the examples and links for concrete implementation notes. The description above and the image show the main idea — for a medior developer focus on inputs, outputs, complexity, and common pitfalls when implementing.';
    }

    ?>

    <section>
        <h2>How does it work?</h2>
        <p><?= $text ?></p>
    </section>

    <?php
}

function showBlock($p) {
?>
<article>
    <a href="<?= $p['link'] ?>" class="image"><img alt="" src="images/<?= $p['image'] ?>"></a>
    <h3><?= $p['name']?></h3>
    <p><?= isset($p['keywords']) ? $p['keywords'] : "" ?></p>
    <ul class="actions">
        <li><a href="<?= $p['link']?>" class="button">Show</a></li>
    </ul>
</article>
<?php
}
