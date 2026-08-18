<?php
include 'template/data.php';
$pattern = $indexed['Hierarchical Clustering'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Hierarchical Clustering builds a tree of clusters either by merging small clusters upward or splitting large ones downward. Think of forming a family tree of groups where you can cut the tree at any level to get a clustering. It differs from flat methods (like k-means) because it provides multi-scale structure and doesn't force a fixed number of clusters upfront.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Hierarchical Clustering models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hierarchical_clustering">Wikipedia: Hierarchical clustering</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
