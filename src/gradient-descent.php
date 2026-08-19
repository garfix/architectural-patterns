<?php
include 'template/data.php';
$pattern = $indexed['Gradient Descent'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <h2>How does it work?</h2>
    <p>Gradient-based methods compute the gradient of an objective with respect to parameters and take steps in the negative gradient direction. Key practical aspects are step-size (learning rate), batch vs full gradients, and techniques like momentum or adaptive optimizers (Adam) to improve convergence and stability.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Neural network training — Minimise training loss with stochastic gradient descent variants (Adam, RMSProp) on large datasets.</li>
        <li>Logistic regression optimisation — Fit classifiers by minimising cross-entropy via batch or mini-batch gradient steps.</li>
        <li>Image deblurring — Solve differentiable inverse problems by optimising reconstruction loss with gradient-based solvers.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Choosing a learning rate that's too high (divergence) or too low (slow convergence)</li>
        <li>Getting stuck in local minima or saddle points</li>
        <li>Vanishing or exploding gradients in deep networks</li>
        <li>Sensitivity to feature scaling and initialization</li>
        <li>Noisy or oscillating loss curves with mini-batch variants</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Gradient_descent">Wikipedia: Gradient descent</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
