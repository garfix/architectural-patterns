<?php
include 'template/data.php';
$pattern = $indexed['DBSCAN'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>DBSCAN groups points that are densely packed and marks isolated points as noise, without specifying the number of clusters beforehand. Imagine drawing circles and seeing which points have enough neighbors — dense regions become clusters. DBSCAN differs from k-means by handling irregular cluster shapes and identifying outliers, but it requires choosing distance and density thresholds carefully.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>DBSCAN models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/DBSCAN">Wikipedia: DBSCAN</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
