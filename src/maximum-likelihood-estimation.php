<?php
include 'template/data.php';
$pattern = $indexed['Maximum Likelihood Estimation'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Finds the parameter values that make the observed data most probable under a chosen model.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Choose the parameter values that make the observed data most probable under your model. In simple cases there are direct formulas; otherwise try numeric search to find the best parameters.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Maximum_likelihood_estimation">Wikipedia: Maximum likelihood estimation</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
