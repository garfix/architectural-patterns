<?php
include 'template/data.php';
$pattern = $indexed['Markov Decision Process'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Markov Decision Process (MDP) formalizes decision-making under uncertainty: states, actions, transition probabilities, and rewards. An agent chooses actions to maximize expected cumulative reward over time, balancing immediate gains with long-term benefits. This differs from passive Markov chains because an MDP includes deliberate choices (actions) and a reward signal — it's the foundation of many reinforcement learning methods. Think of it as a game engine where you design policies (action rules) to get the best score given stochastic dynamics.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>You describe the situations (states), the choices you can make (actions), and the rewards you get. The aim is to choose actions that give the best total reward over time. Start with a simple model to understand action choices before making it more complex.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_decision_process">Wikipedia: Markov decision process</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
