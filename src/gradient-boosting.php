<?php
include 'template/data.php';
$pattern = $indexed['Gradient Boosting'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Builds a sequence of weak models, each one correcting the errors of the ones before it.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Gradient_boosting">Wikipedia: Gradient boosting</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
