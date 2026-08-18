<?php
include 'template/data.php';
$pattern = $indexed['t-SNE'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>T-SNE is a technique for visualizing high-dimensional data by embedding it into 2 or 3 dimensions while preserving local similarities. Think of squashing high-dimensional structure into a scatterplot that keeps neighbors together. T-SNE differs from PCA by focusing on local structure for visualization (not global variance) and isn't suitable as a general-purpose dimensionality reduction for downstream modeling.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Projects high-dimensional data to low dimensions by modeling pairwise similarities and minimizing divergence between high- and low-dimensional neighbor distributions.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/T-distributed_stochastic_neighbor_embedding">Wikipedia: t-SNE</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
