<?php
include 'template/data.php';
$pattern = $indexed['Gradient Descent'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <h2>How does it work?</h2>
    <p>Gradient-based methods compute the gradient of an objective with respect to parameters and take steps in the negative gradient direction. Key practical aspects are step-size (learning rate), batch vs full gradients, and techniques like momentum or adaptive optimizers (Adam) to improve convergence and stability.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Gradient_descent">Wikipedia: Gradient descent</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
