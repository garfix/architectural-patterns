<?php
include 'template/data.php';
$pattern = $indexed['Naive Bayes Classifier'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Naive Bayes is a fast probabilistic classifier that assumes features are independent given the class. Despite this strong assumption, it often works well in practice (e.g., text classification). Think of multiplying simple likelihoods for each feature and picking the class with the highest score. It differs from more expressive probabilistic models by trading modeling fidelity for speed and simplicity.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Naive Bayes Classifier models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Email spam filtering — Fast multinomial Naive Bayes on token counts for production spam classifiers.</li>
        <li>Document classification — Classify news articles or support tickets by word-frequency models.</li>
        <li>Baseline text categorisation — Quick baseline models in pipelines before moving to heavier architectures.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Independence assumption between features rarely holds in practice</li>
        <li>Zero-frequency problem when a category wasn't seen in training</li>
        <li>Poor probability calibration despite decent classification accuracy</li>
        <li>Sensitive to how continuous features are discretized/modeled</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Naive_Bayes_classifier">Wikipedia: Naive Bayes classifier</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
