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
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Semantic Network methods manipulate symbols or rules: represent knowledge explicitly, and apply inference algorithms (forward/backward chaining, constraint propagation, search). Implementations focus on rule ordering, conflict resolution, and efficient indexing of facts.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Knowledge graphs for QA — Represent entities and relations to answer factual queries in enterprise search.</li>
        <li>Ontology-driven recommendations — Use typed relationships to infer related products or concepts.</li>
        <li>Entity linking — Map text mentions to graph nodes to support downstream NLP tasks.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Manually building and maintaining the network is labor-intensive</li>
        <li>Ambiguity in relationship semantics between nodes</li>
        <li>Scaling to very large knowledge bases without inconsistency</li>
        <li>No built-in mechanism for reasoning under uncertainty</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Semantic_network">Wikipedia: Semantic network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
