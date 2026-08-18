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
    <p>Repeatedly selects among options (arms) to balance exploration and exploitation, updating estimates of each arm's value from observed rewards.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Multi-armed_bandit">Wikipedia: Multi-armed bandit</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
