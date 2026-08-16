<?php
include 'template/data.php';
$pattern = $indexed['Hierarchical Clustering'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Builds a tree of nested clusters, either by merging small groups upward or splitting large ones downward.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hierarchical_clustering">Wikipedia: Hierarchical clustering</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
