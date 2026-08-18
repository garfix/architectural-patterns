<?php
include 'template/data.php';
$pattern = $indexed['Support Vector Machine'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Support Vector Machines (SVMs) try to find the boundary that separates classes with the largest margin. They can use kernels to operate in transformed feature spaces for non-linear separation. Picture fitting a fence that leaves the widest gap between classes. SVMs differ from probabilistic classifiers (like logistic regression) by focusing on margin maximization and from tree-based methods in how they handle feature interactions and generalization.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Finds a decision boundary that maximizes the margin between classes, using kernel functions to handle non-linear separations.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Support_vector_machine">Wikipedia: Support vector machine</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
