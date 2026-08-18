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

    <h2>How does it work?</h2>
    <p>Learns action-value estimates by updating Q-values from observed rewards and bootstrapped estimates of future value, then derives a policy by choosing actions with highest Q.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Q-learning">Wikipedia: Q-Learning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
