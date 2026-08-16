<?php
include 'template/data.php';
$pattern = $indexed['Q-Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Learns the value of taking a given action in a given state purely through trial and error.</dd>
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
