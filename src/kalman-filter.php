<?php
include 'template/data.php';
$pattern = $indexed['Kalman Filter'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Kalman Filter estimates the hidden state of a system that changes over time from noisy measurements. It alternates between prediction (projecting the state forward) and update (correcting with new observations) using linear algebra and Gaussian assumptions. Use it when you need a real-time estimate of a moving target (like position from noisy sensors). It differs from batch methods because it works online step-by-step and assumes linear-Gaussian dynamics; if the system is non-linear, extended or unscented variants are used.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>A Kalman filter alternates predict and update steps: predict the state forward using the motion model, then incorporate the noisy measurement by computing a gain that balances model and measurement uncertainty. It maintains a mean and covariance and is efficient for linear Gaussian systems; non-linear variants linearize or use sigma-points.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Kalman_filter">Wikipedia: Kalman filter</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
