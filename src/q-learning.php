<?php
include 'template/data.php';
$pattern = $indexed['Q-Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Q-Learning is a model-free reinforcement learning algorithm that learns the value (Q) of taking actions in states by bootstrapping from observed rewards and future value estimates. Think of updating a table that scores how good each action is in each situation through trial and error. Q-Learning differs from policy gradient methods by learning value estimates directly and from model-based approaches by not requiring a model of environment dynamics.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Q-Learning operates by interacting with an environment: observe state, choose action, receive reward, and update a policy or value estimator. Practical implementations must balance exploration and exploitation and handle credit assignment across time via bootstrapping or Monte Carlo returns.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Grid-world navigation — Tabular Q-learning to teach agents to reach goals in discrete environments.</li>
        <li>Game AI (classic) — Train agents to play simple arcade games using Q-value updates and epsilon-greedy exploration.</li>
        <li>Ad placement bandits — Use Q-learning variants to learn action values for contextual decision settings.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Q-table becomes intractable in large or continuous state spaces</li>
        <li>Slow convergence, requiring many episodes of exploration</li>
        <li>Balancing exploration vs. exploitation (epsilon tuning)</li>
        <li>Overestimation bias in Q-value updates</li>
        <li>Sensitive to reward shaping and hyperparameters</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Q-learning">Wikipedia: Q-Learning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
