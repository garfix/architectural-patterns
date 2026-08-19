<?php
include 'template/data.php';
$pattern = $indexed['Artificial Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An Artificial Neural Network (ANN) is a layered set of simple computation units (neurons) that learn complex mappings from inputs to outputs by adjusting weights using data. Think of it as a function approximator that learns patterns through examples. ANNs can model highly non-linear relationships and differ from simpler algorithms (like linear regression or decision trees) by requiring more data and compute but offering greater flexibility. Architectures and training choices (depth, activation, optimization) determine their behavior and suitability.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Neural networks compose layers of parameterised functions; training minimises a loss over labeled examples by backpropagating gradients and updating parameters with optimisers. Important engineering details include architecture choices, regularisation, and validation to avoid overfitting.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Image classification — Train convolutional networks to detect objects in medical imaging or autonomous vehicles.</li>
        <li>Speech recognition — Sequence models to transcribe spoken language into text for virtual assistants.</li>
        <li>Anomaly detection — Autoencoder-based architectures to detect manufacturing defects from sensor data.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Requires large labeled datasets to generalize well</li>
        <li>Overfitting without proper regularization</li>
        <li>Vanishing/exploding gradients in deeper architectures</li>
        <li>Poor interpretability of learned weights ('black box')</li>
        <li>Sensitive to hyperparameter choices (architecture, learning rate, initialization)</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Neural_network_(machine_learning)">Wikipedia: Artificial neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
