<?php
include 'template/data.php';
$pattern = $indexed['Linear Discriminant Analysis'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Linear Discriminant Analysis (LDA) finds linear combinations of features that separate classes best and models class-conditional Gaussian distributions. Imagine projecting data onto a line where classes become as distinct as possible. LDA differs from SVMs and logistic regression by its probabilistic generative assumptions and closed-form solutions — when those assumptions hold, LDA can be very effective and interpretable.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Linear Discriminant Analysis models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Face recognition projection — Project high-dimensional features to lower dimensions for classification tasks.</li>
        <li>Medical diagnostic scoring — Linear separators for multi-class problems with Gaussian assumptions.</li>
        <li>Feature reduction for classifiers — Reduce dimensionality before applying simple classifiers for speed.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Linear_discriminant_analysis">Wikipedia: Linear discriminant analysis</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
