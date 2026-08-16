<?php
include 'template/data.php';
$pattern = $indexed['Support Vector Machine'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Finds the boundary that separates classes of data with the widest possible margin between them.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Finds a decision boundary that maximizes the margin between classes, using kernel functions to handle non-linear separations.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Support_vector_machine">Wikipedia: Support vector machine</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
