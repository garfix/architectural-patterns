<?php
include 'template/data.php';
$pattern = $indexed['Gradient Descent'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

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
