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
    <?php showImage($pattern) ?>

    

    <h2>How does it work?</h2>
    <p>In practice this means maintaining a probability distribution (the prior), computing how likely new observations are under possible hypotheses (the likelihood), and combining them to form an updated distribution (the posterior). Implementations often work incrementally: observe a batch or a single datum, compute the likelihood, multiply it into the prior and renormalize. Numerical care (log-probabilities) and choice of conjugate priors or sampling methods are common engineering concerns.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Medical diagnosis — Probabilistic diagnosis — Combine prior disease prevalence with patient test results to update the probability of conditions in clinical decision support systems.</li>
        <li>Email spam filtering — Compute posterior probability that a message is spam by updating token likelihoods as new labeled messages arrive.</li>
        <li>A/B testing analysis — Incorporate prior expectations and observed conversion data to estimate treatment effects and uncertainty for product experiments.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Choosing an inappropriate or overly informative prior that skews results</li>
        <li>Posterior distributions with no closed form, requiring approximation</li>
        <li>Computational cost blowing up as the number of parameters grows</li>
        <li>Difficulty explaining prior/posterior tradeoffs to non-technical stakeholders</li>
        <li>Model misspecification silently producing confidently wrong posteriors</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Bayesian_inference">Wikipedia: Bayesian inference</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
