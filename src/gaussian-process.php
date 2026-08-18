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
    <p>It predicts values by assuming nearby inputs produce similar outputs. You pick a rule for how similarity works, give the model some examples, and it predicts new points with an estimate of how certain the prediction is.</p>

        <li><a href="https://en.wikipedia.org/wiki/Gaussian_process">Wikipedia: Gaussian process</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
