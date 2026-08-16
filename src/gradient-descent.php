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
        <dd>Iteratively adjusts parameters in the direction that most reduces error, used to train most modern models.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Gradient_descent">Wikipedia: Gradient descent</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
