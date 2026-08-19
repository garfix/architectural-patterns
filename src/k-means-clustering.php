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
    <p>k-Means Clustering models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Customer segmentation — Cluster customers by behaviour for targeted marketing campaigns.</li>
        <li>Color quantization — Reduce image palettes by clustering pixel colours for compression.</li>
        <li>Document clustering — Group similar documents for search indexing and exploratory analysis.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Must choose the number of clusters k in advance</li>
        <li>Sensitive to initial centroid placement, leading to different results</li>
        <li>Assumes spherical, similarly-sized clusters, which is often unrealistic</li>
        <li>Sensitive to outliers and unscaled features</li>
        <li>Struggles with non-convex cluster shapes</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/K-means_clustering">Wikipedia: k-Means Clustering</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
