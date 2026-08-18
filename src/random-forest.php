<?php
include 'template/data.php';
$pattern = $indexed['Random Forest'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Random Forest builds many decision trees on random subsets of data and features, then averages their predictions. This reduces overfitting and typically improves accuracy compared to a single tree. S, imagine asking many slightly different experts and taking a majority vote. Random Forest differs from boosting because it trains trees independently and aggregates, while boosting adds trees sequentially to correct previous errors.</dd>
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
