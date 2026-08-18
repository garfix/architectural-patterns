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

    <h2>How does it work?</h2>
    <p>Builds a hierarchy of clusters by iteratively merging (agglomerative) or splitting (divisive) groups based on similarity metrics.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hierarchical_clustering">Wikipedia: Hierarchical clustering</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
