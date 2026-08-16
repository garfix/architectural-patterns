<?php
include 'template/data.php';
$pattern = $indexed['Bayesian Inference'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Updates the probability of a belief as new evidence comes in, by combining prior knowledge with observed data.</dd>
    </dl>
    <figure><img alt="" src="images/bayesian-inference.svg"><figcaption>Bayesian Inference diagram</figcaption></figure>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Bayesian_inference">Wikipedia: Bayesian inference</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
