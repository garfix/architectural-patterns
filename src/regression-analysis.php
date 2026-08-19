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

    
    
    <h2>Examples</h2>
    <ul>
        <li>House price modelling — Predict property prices from features (size, location) using linear or regularised regression.</li>
        <li>Dose–response curves — Model the relationship between drug dose and effect using parametric regression.</li>
        <li>Forecasting sales — Fit regression models with seasonal covariates for short-term demand prediction.</li>
    </ul>




    
    <h2>Problems</h2>
    <ul>
        <li>Multicollinearity among predictors inflating variance of coefficients</li>
        <li>Overfitting with too many features relative to observations</li>
        <li>Violated assumptions (linearity, homoscedasticity, normal residuals)</li>
        <li>Outliers and leverage points skewing the fit</li>
        <li>Confusing correlation captured by the model with causation</li>
    </ul>

</section>

<?php
include 'template/footer.php';
