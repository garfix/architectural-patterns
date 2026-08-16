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

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/T-distributed_stochastic_neighbor_embedding">Wikipedia: t-SNE</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
