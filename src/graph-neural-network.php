<?php
include 'template/data.php';
$pattern = $indexed['Graph Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Graph Neural Networks (GNNs) are neural architectures that operate on graphs by passing messages between nodes and aggregating neighbor information to compute node or graph representations. Visualize nodes exchanging information with their neighbors then updating their own state. GNNs differ from regular neural nets by natively handling graph structure and from probabilistic graphical models by being learned, differentiable models rather than explicit probabilistic encodings.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Learns representations by passing messages between nodes and aggregating neighbor information along graph edges to update node features.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Graph_neural_network">Wikipedia: Graph neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
