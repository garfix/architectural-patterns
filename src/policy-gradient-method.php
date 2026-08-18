<?php
include 'template/data.php';
$pattern = $indexed['Policy Gradient Method'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Policy Gradient methods directly optimize the agent's action-selection strategy by estimating gradients of expected reward with respect to policy parameters and taking gradient steps. Picture nudging the policy toward actions that led to higher rewards. These methods differ from value-based ones (like Q-learning) as they optimize the policy directly and can naturally handle continuous action spaces.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Policy Gradient Method operates by interacting with an environment: observe state, choose action, receive reward, and update a policy or value estimator. Practical implementations must balance exploration and exploitation and handle credit assignment across time via bootstrapping or Monte Carlo returns.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Policy_gradient_method">Wikipedia: Policy gradient method</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
