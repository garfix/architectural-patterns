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

    <h2>How does it work?</h2>
    <p>Put simple processing units in layers and connect them. Show many example inputs and desired outputs, and automatically adjust the connections so the network produces the right outputs for the examples.</p>

        <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Neural_network_(machine_learning)">Wikipedia: Artificial neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
