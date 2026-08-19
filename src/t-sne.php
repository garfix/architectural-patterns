<?php
include 'template/data.php';
$pattern = $indexed['t-SNE'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>T-SNE is a technique for visualizing high-dimensional data by embedding it into 2 or 3 dimensions while preserving local similarities. Think of squashing high-dimensional structure into a scatterplot that keeps neighbors together. T-SNE differs from PCA by focusing on local structure for visualization (not global variance) and isn't suitable as a general-purpose dimensionality reduction for downstream modeling.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>t-SNE models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Visualising embeddings — Project high-dimensional model embeddings to 2D for cluster inspection in ML experiments.</li>
        <li>Single-cell RNA-seq analysis — Visualise cell populations and subtypes from expression profiles.</li>
        <li>Debugging representation quality — Use t-SNE plots to inspect if different classes separate in learned embeddings.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Results are highly sensitive to the perplexity parameter</li>
        <li>Doesn't preserve global structure or distances reliably, only local</li>
        <li>Slow and memory-intensive on large datasets</li>
        <li>Non-deterministic — different runs can produce different layouts</li>
        <li>Cluster sizes/distances in the plot can be misleading</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/T-distributed_stochastic_neighbor_embedding">Wikipedia: t-SNE</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
