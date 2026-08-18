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

    <h2>How does it work?</h2>
    <p>Represents variables and conditional dependencies as a directed acyclic graph; belief propagation and inference update probabilities given observed evidence.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Bayesian_network">Wikipedia: Bayesian network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
