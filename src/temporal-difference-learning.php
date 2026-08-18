<?php
include 'template/data.php';
$pattern = $indexed['Temporal Difference Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Temporal Difference (TD) Learning updates value estimates using the difference between successive predictions — it learns from incomplete episodes by bootstrapping. S, imagine improving your estimate of running total rewards step-by-step, using your current prediction to update the previous one. TD differs from Monte Carlo methods by updating before the final outcome and from supervised learning by relying on reward signals from interaction.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Temporal Difference Learning operates by interacting with an environment: observe state, choose action, receive reward, and update a policy or value estimator. Practical implementations must balance exploration and exploitation and handle credit assignment across time via bootstrapping or Monte Carlo returns.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Temporal_difference_learning">Wikipedia: Temporal difference learning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
