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
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Graph Neural Network algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Molecule property prediction — Predict chemical properties by operating on molecular graphs for drug discovery.</li>
        <li>Social influence modelling — Predict node labels or link formation using neighborhood aggregation in social graphs.</li>
        <li>Traffic flow prediction — Use road network graphs and GNNs to predict future congestion patterns.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Over-smoothing, where node representations become indistinguishable in deep networks</li>
        <li>Scalability challenges on very large graphs</li>
        <li>Sensitive to graph structure quality and missing/noisy edges</li>
        <li>Limited expressiveness for certain graph structures without careful design</li>
        <li>Difficult to batch efficiently due to variable graph sizes</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Graph_neural_network">Wikipedia: Graph neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
