<?php
include 'template/data.php';
$pattern = $indexed['Multi-Armed Bandit'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The Multi-Armed Bandit formalizes the exploration-vs-exploitation trade-off in a simplified one-step setting: choose among several options with unknown rewards and learn which is best. Think of many slot machines (arms) where you must balance trying new arms against exploiting the best-known one. It differs from full RL because there is no state transition — decisions are single-step but capture the core challenge of learning under uncertainty.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Multi-Armed Bandit operates by interacting with an environment: observe state, choose action, receive reward, and update a policy or value estimator. Practical implementations must balance exploration and exploitation and handle credit assignment across time via bootstrapping or Monte Carlo returns.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Ad selection — Balance exploration and exploitation to pick which ad variant to show to maximise clicks.</li>
        <li>Clinical trial allocation — Adaptively assign treatments to patients to improve outcomes while learning efficacy.</li>
        <li>News recommendation — Serve articles while learning click rates with contextual bandit algorithms.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Multi-armed_bandit">Wikipedia: Multi-armed bandit</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
