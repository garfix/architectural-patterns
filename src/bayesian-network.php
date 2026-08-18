<?php
include 'template/data.php';
$pattern = $indexed['Bayesian Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Bayesian Network is a directed acyclic graph that encodes probabilistic dependencies between variables. Each node has a conditional probability table describing how it depends on its parents. Think of a cause-effect diagram with probabilities that you can use to compute posterior beliefs. Bayesian networks differ from flat probabilistic models by making conditional independencies explicit, enabling efficient reasoning about causality and interventions.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>In practice this means maintaining a probability distribution (the prior), computing how likely new observations are under possible hypotheses (the likelihood), and combining them to form an updated distribution (the posterior). Implementations often work incrementally: observe a batch or a single datum, compute the likelihood, multiply it into the prior and renormalize. Numerical care (log-probabilities) and choice of conjugate priors or sampling methods are common engineering concerns.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Diagnostic decision support — Model causal symptom-disease relations to compute posterior disease probabilities.</li>
        <li>Risk assessment — Model dependencies between risk factors to compute joint failure probabilities.</li>
        <li>Gene regulatory modelling — Represent probabilistic interactions between genes for biological inference.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Bayesian_network">Wikipedia: Bayesian network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
