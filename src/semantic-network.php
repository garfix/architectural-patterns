<?php
include 'template/data.php';
$pattern = $indexed['Semantic Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Semantic Network represents knowledge as nodes (concepts) connected by labeled relationships, forming a graph you can query and reason over. Picture a mind map where concepts link with typed edges like "is-a" or "part-of." It differs from tabular data representations by emphasizing relationships and from purely statistical embeddings by being explicit and interpretable.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Represents concepts as nodes and relationships as labeled edges, enabling traversal and inference over semantic relations.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Semantic_network">Wikipedia: Semantic network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
