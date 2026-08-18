<?php
include 'template/data.php';
$pattern = $indexed['Bayesian Inference'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Bayesian inference is a way to update what you believe about something when you get new data. Start with a prior (your initial guess), observe new evidence, and combine them to produce a posterior (an improved guess). Think of it like updating a probability score for a hypothesis each time you get a new test result. Unlike frequentist methods like maximum likelihood (which only use current data), Bayesian methods explicitly include prior beliefs and give a distribution over possibilities, which makes them useful when data are scarce or when you want a measure of uncertainty.</dd>
    </dl>
    <figure><img alt="" src="images/bayesian-inference.svg"><figcaption>Bayesian Inference diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>Start with an initial guess about how likely something is, then change that guess as you see new evidence. It is a simple recipe: have a prior belief, look at new data, and update your belief to reflect the data.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Bayesian_inference">Wikipedia: Bayesian inference</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
