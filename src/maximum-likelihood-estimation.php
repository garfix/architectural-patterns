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
    <p>Maximum Likelihood Estimation algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Logistic regression fitting — Estimate model coefficients by maximising data likelihood for binary outcomes in risk models.</li>
        <li>Gaussian mixture parameters — Fit component means and variances by maximising likelihood with EM for clustering.</li>
        <li>Survival model calibration — Estimate hazard parameters from censored time-to-event data in clinical studies.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Overfitting with small sample sizes</li>
        <li>No closed-form solution requiring iterative numerical optimization</li>
        <li>Sensitivity to outliers distorting the estimate</li>
        <li>Local optima in non-convex likelihood surfaces</li>
        <li>Misspecified likelihood model leading to biased parameter estimates</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Maximum_likelihood_estimation">Wikipedia: Maximum likelihood estimation</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
