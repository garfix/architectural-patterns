<?php
include 'template/data.php';
$pattern = $indexed['Principal Component Analysis'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>PCA reduces dimensionality by finding directions (principal components) where data varies most, projecting data into a lower-dimensional space while preserving as much variance as possible. S, picture rotating the data to find the best axes summarizing it. PCA differs from non-linear methods (like t-SNE) by being linear and interpretable, and it's often used as a preprocessing step.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Principal Component Analysis models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Principal_component_analysis">Wikipedia: Principal Component Analysis</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
