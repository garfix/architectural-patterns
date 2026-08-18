<?php
include 'template/data.php';
$pattern = $indexed['Maximum Likelihood Estimation'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Maximum Likelihood Estimation (MLE) finds parameter values that make the observed data most probable under a chosen model. You write a likelihood function and optimize it to get point estimates. Think of tuning model knobs until the model would most likely have produced your data. MLE differs from Bayesian methods by not using priors or producing full posterior distributions — it provides a single best-fit answer and is often simpler computationally.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Choose the parameter values that make the observed data most probable under your model. In simple cases there are direct formulas; otherwise try numeric search to find the best parameters.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Maximum_likelihood_estimation">Wikipedia: Maximum likelihood estimation</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
