<?php
include 'template/data.php';
$pattern = $indexed['Markov Decision Process'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A framework for decision-making where outcomes are partly random and partly under the control of an agent choosing actions.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
    <h2>How does it work?</h2>
    <p>You describe the situations (states), the choices you can make (actions), and the rewards you get. The aim is to choose actions that give the best total reward over time. Start with a simple model to understand action choices before making it more complex.</p>

        <li><a href="https://en.wikipedia.org/wiki/Markov_decision_process">Wikipedia: Markov decision process</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
