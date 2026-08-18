<?php
include 'template/data.php';
$pattern = $indexed['Principal Component Analysis'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>PCA reduces dimensionality by finding directions (principal components) where data varies most, projecting data into a lower-dimensional space while preserving as much variance as possible. S, picture rotating the data to find the best axes summarizing it. PCA differs from non-linear methods (like t-SNE) by being linear and interpretable, and it's often used as a preprocessing step.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Computes orthogonal directions (principal components) that capture the largest variance, projecting data to a lower-dimensional space.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Principal_component_analysis">Wikipedia: Principal Component Analysis</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
