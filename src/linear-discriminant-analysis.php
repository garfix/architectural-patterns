<?php
include 'template/data.php';
$pattern = $indexed['Linear Discriminant Analysis'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Finds a linear combination of features that best separates two or more classes.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Finds linear combinations of features that best separate classes by maximizing between-class variance relative to within-class variance.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Linear_discriminant_analysis">Wikipedia: Linear discriminant analysis</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
