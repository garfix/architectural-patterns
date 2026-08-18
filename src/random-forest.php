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
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Trees split data by feature thresholds to partition space; ensemble methods build many trees on bootstrapped samples and aggregate predictions. Focus on feature selection, depth control, and understanding variable importance when using these models.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Fraud detection — Ensemble tree models detect anomalous transactions using many randomised trees.</li>
        <li>Feature importance analysis — Use permutation importance from forests to prioritise variables for product teams.</li>
        <li>Retail demand forecasting — Apply ensembles on tabular sales data for robust short-term forecasts.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Random_forest">Wikipedia: Random forest</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
