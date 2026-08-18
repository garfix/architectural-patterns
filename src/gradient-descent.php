<?php
include 'template/data.php';
$pattern = $indexed['Gradient Descent'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <h2>How does it work?</h2>
    <p>Start with a guess for the values you want to tune, measure how wrong the guess is, and change the values a little to make the error smaller. Repeat until it gets good enough.</p>
    <dl>
        <dt>Definition</dt>
        <dd>Gradient Descent is an iterative optimization algorithm that nudges parameters in the direction that reduces error the fastest, measured by the gradient. It's the workhorse behind training many machine learning models, especially neural networks. Imagine rolling downhill on the loss surface toward a valley representing better solutions. It differs from global search methods (like simulated annealing or evolutionary algorithms) because it uses local slope information and typically finds a local minimum — not necessarily the global best.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Gradient_descent">Wikipedia: Gradient descent</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
