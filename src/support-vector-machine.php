<?php
include 'template/data.php';
$pattern = $indexed['Support Vector Machine'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Support Vector Machines (SVMs) try to find the boundary that separates classes with the largest margin. They can use kernels to operate in transformed feature spaces for non-linear separation. Picture fitting a fence that leaves the widest gap between classes. SVMs differ from probabilistic classifiers (like logistic regression) by focusing on margin maximization and from tree-based methods in how they handle feature interactions and generalization.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Support Vector Machine models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Text classification — Linear SVMs on TF-IDF features for spam or sentiment classification.</li>
        <li>Face recognition (embedding classification) — Use kernel SVMs on precomputed embeddings for small-scale recognition tasks.</li>
        <li>Anomaly boundary detection — Use one-class SVM to model normal behaviour and detect outliers.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Support_vector_machine">Wikipedia: Support vector machine</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
