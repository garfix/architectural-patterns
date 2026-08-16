<?php
include 'template/data.php';
$pattern = $indexed['Naive Bayes Classifier'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A fast probabilistic classifier that assumes input features are independent of each other given the class.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Naive_Bayes_classifier">Wikipedia: Naive Bayes classifier</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
