<?php
include 'template/data.php';
$pattern = $indexed['Regression Analysis'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Regression analysis models the relationship between input variables and an output you want to predict. It ranges from simple linear regression to more complex generalized models. Regression is how you turn historic examples into a function you can call to predict future outcomes. It differs from classification (predicting categories) and from nonparametric techniques (like Gaussian processes) in how the model is structured and what assumptions are made about the form of the relationship.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2 id="links">Links</h2>
    <ol>
    <h2>How does it work?</h2>
    <p>Pick a simple formula that relates inputs to outputs and adjust its numbers so the formula matches known examples. Check how well the formula predicts new data and fix it if it performs poorly.</p>

        <li><a href="https://en.wikipedia.org/wiki/Regression_analysis">Wikipedia: Regression analysis</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
