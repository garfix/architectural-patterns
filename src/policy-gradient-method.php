<?php
include 'template/data.php';
$pattern = $indexed['Policy Gradient Method'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Directly adjusts the agent's decision-making strategy to increase actions that lead to higher rewards.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Optimizes a parameterized policy directly by estimating gradients of expected returns and updating policy parameters in the direction of higher reward.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Policy_gradient_method">Wikipedia: Policy gradient method</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
