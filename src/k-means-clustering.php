<?php
include 'template/data.php';
$pattern = $indexed['k-Means Clustering'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Groups data points into a fixed number of clusters by repeatedly assigning points to the nearest cluster center.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Initializes k centroids, assigns points to the nearest centroid, and updates centroids iteratively until assignments stabilize.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/K-means_clustering">Wikipedia: k-Means Clustering</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
