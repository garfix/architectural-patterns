<?php
include 'template/data.php';
$pattern = $indexed['t-SNE'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Compresses high-dimensional data into two or three dimensions for visualization while preserving local similarity.</dd>
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
