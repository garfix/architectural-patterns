<?php
include 'template/data.php';
$pattern = $indexed['Gaussian Process'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A probabilistic model over functions that produces predictions along with a measure of confidence in them.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
    <h2>How does it work?</h2>
    <p>It predicts values by assuming nearby inputs produce similar outputs. You pick a rule for how similarity works, give the model some examples, and it predicts new points with an estimate of how certain the prediction is.</p>

        <li><a href="https://en.wikipedia.org/wiki/Gaussian_process">Wikipedia: Gaussian process</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
