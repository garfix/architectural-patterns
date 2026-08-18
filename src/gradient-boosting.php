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
    <p>Builds an ensemble by fitting successive weak learners to the residuals of prior models, combining them to reduce overall error.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Gradient_boosting">Wikipedia: Gradient boosting</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
