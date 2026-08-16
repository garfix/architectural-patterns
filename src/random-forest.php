<?php
include 'template/data.php';
$pattern = $indexed['Random Forest'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Combines many decision trees trained on random subsets of data and averages their predictions for more accuracy.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Trains many decision trees on random subsets of data and features, then aggregates their predictions (voting or averaging) for more robust results.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Random_forest">Wikipedia: Random forest</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
