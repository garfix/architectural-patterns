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
    <p>Regression Analysis algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
</section>

<?php
include 'template/footer.php';
