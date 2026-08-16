<?php
include 'template/data.php';
$pattern = $indexed['Multi-Armed Bandit'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Balances trying new options against sticking with the best-known option in a simplified one-step RL problem.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Multi-armed_bandit">Wikipedia: Multi-armed bandit</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
