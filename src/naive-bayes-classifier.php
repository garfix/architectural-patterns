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
    <p>Computes class probabilities using Bayes' rule with the strong assumption that features are conditionally independent given the class, then picks the highest-probability class.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Naive_Bayes_classifier">Wikipedia: Naive Bayes classifier</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
