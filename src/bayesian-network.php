<?php
include 'template/data.php';
$pattern = $indexed['Bayesian Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A directed graph showing how variables probabilistically influence each other, useful for causal reasoning.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Bayesian_network">Wikipedia: Bayesian network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
