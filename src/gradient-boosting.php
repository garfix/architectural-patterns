<?php
include 'template/data.php';
$pattern = $indexed['Gradient Boosting'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Gradient Boosting builds a sequence of weak learners (often shallow trees), where each new model focuses on correcting errors made by the previous ensemble. Over many iterations you get a strong predictor. Think of many small trees each learning the residual mistakes and cumulatively improving predictions. It differs from random forests by training sequentially and typically reaching higher accuracy at the cost of more careful tuning and sensitivity to overfitting.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Gradient Boosting models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Credit scoring — Train boosted trees (XGBoost/LightGBM) for high-accuracy risk models in finance.</li>
        <li>Click-through rate prediction — Use gradient-boosted models on sparse features for ad-serving systems.</li>
        <li>Customer lifetime value — Predict long-term value with boosted ensembles that handle heterogeneous features.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Prone to overfitting if not carefully regularized (learning rate, depth, early stopping)</li>
        <li>Slower to train sequentially compared to bagging methods</li>
        <li>Sensitive to noisy data and outliers</li>
        <li>Many hyperparameters to tune, making optimization costly</li>
        <li>Can require careful handling of missing values depending on implementation</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Gradient_boosting">Wikipedia: Gradient boosting</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
