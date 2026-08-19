<?php
include 'template/data.php';
$pattern = $indexed['Self-Organizing Map'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Self-Organizing Map (SOM) is a neural-network-like method that maps high-dimensional data onto a low-dimensional grid while preserving topology: similar inputs end up near each other. Picture arranging nodes on a grid so that they represent different clusters of the data. SOMs differ from other clustering and embedding techniques by providing a structured grid that can be visualized and interpreted.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Self-Organizing Map models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Topology-preserving embedding — Map high-dimensional sensory data onto 2D grids for visual analytics.</li>
        <li>Customer behaviour maps — Visual cluster maps that help marketing teams explore segments.</li>
        <li>Anomaly visualisation — Spot unusual input patterns as isolated nodes on the map.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Choosing an appropriate map size and topology in advance</li>
        <li>Sensitive to learning rate and neighborhood radius schedules</li>
        <li>Slow to train on large, high-dimensional datasets</li>
        <li>Results can be hard to interpret and validate quantitatively</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Self-organizing_map">Wikipedia: Self-Organizing Map</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
