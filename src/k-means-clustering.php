<?php
include 'template/data.php';
$pattern = $indexed['k-Means Clustering'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>K-Means divides data into k clusters by alternating assignment to the nearest center and updating centers to the mean of assigned points. Imagine grouping points by repeatedly putting them into the nearest cluster center until things stabilize. K-Means differs from density-based methods (like DBSCAN) because it assumes spherical clusters and a fixed k, making it fast but less flexible for irregular shapes.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Initializes k centroids, assigns points to the nearest centroid, and updates centroids iteratively until assignments stabilize.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/K-means_clustering">Wikipedia: k-Means Clustering</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
