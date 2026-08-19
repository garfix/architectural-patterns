<?php
include 'template/data.php';
$pattern = $indexed['Markov Decision Process'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Markov Decision Process (MDP) formalizes decision-making under uncertainty: states, actions, transition probabilities, and rewards. An agent chooses actions to maximize expected cumulative reward over time, balancing immediate gains with long-term benefits. This differs from passive Markov chains because an MDP includes deliberate choices (actions) and a reward signal — it's the foundation of many reinforcement learning methods. Think of it as a game engine where you design policies (action rules) to get the best score given stochastic dynamics.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Markov Decision Process algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Robotics navigation — Model robot movement and rewards to compute optimal policies for reaching goals while avoiding obstacles.</li>
        <li>Inventory management — Use states for stock levels and actions for reorder decisions to minimise costs under uncertainty.</li>
        <li>Automated trading backtests — Model discrete states and actions to evaluate policy performance under simulated market dynamics.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Defining a reward function that doesn't produce unintended behavior (reward hacking)</li>
        <li>Curse of dimensionality in large state/action spaces</li>
        <li>Uncertainty or inaccuracy in the transition model</li>
        <li>Balancing discount factor choice against convergence and myopia</li>
        <li>Difficulty validating the policy before deployment in a real environment</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_decision_process">Wikipedia: Markov decision process</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
