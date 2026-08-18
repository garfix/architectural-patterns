<?php
include 'template/data.php';
$pattern = $indexed['Gaussian Process'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Gaussian Process (GP) is a way to model unknown functions probabilistically. Instead of learning a single curve, a GP gives a distribution over possible functions that fit the data, and it provides both predictions and uncertainty estimates for any input. Think of a GP as a flexible, Bayesian regression method that tells you not only the predicted value but also how confident it is. GPs differ from parametric models (like simple linear regression) by being nonparametric: complexity grows with data instead of being fixed by a small set of parameters.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2 id="links">Links</h2>
    <ol>
    <h2>How does it work?</h2>
    <p>Gaussian Process algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
</section>

<?php
include 'template/footer.php';
