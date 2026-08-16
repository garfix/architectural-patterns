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
        <li><a href="https://en.wikipedia.org/wiki/Gaussian_process">Wikipedia: Gaussian process</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
