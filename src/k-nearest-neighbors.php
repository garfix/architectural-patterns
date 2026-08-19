<?php
include 'template/data.php';
$pattern = $indexed['k-Nearest Neighbors'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>K-Nearest Neighbors (k-NN) classifies new points based on the labels of the k closest training examples. It's simple and nonparametric: store the data and use distance at query time. Think of asking the nearest neighbors what label they have and going with the majority. K-NN differs from models that summarize data into parameters (like SVMs or neural networks) because it keeps raw examples and can be slow at prediction time but very flexible.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>k-Nearest Neighbors models learn from labeled examples: prepare features, choose a model family, train on examples, and validate on held-out data. Pay attention to data preprocessing, class imbalance, and hyperparameter tuning.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Recommendation by similarity — Nearest-neighbour lookup on user/item embeddings for simple recommender baselines.</li>
        <li>Medical case retrieval — Retrieve past patient cases with similar measurements for clinical decision support.</li>
        <li>Image retrieval — Find images with similar descriptors in a database using k-NN search.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Slow inference on large datasets (must compare to many points)</li>
        <li>Sensitive to irrelevant or unscaled features</li>
        <li>Curse of dimensionality degrading distance meaningfulness</li>
        <li>Choosing an appropriate k value and distance metric</li>
        <li>High memory usage storing the full training set</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/K-nearest_neighbors_algorithm">Wikipedia: k-Nearest Neighbors</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
