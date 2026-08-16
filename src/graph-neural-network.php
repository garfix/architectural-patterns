<?php
include 'template/data.php';
$pattern = $indexed['Graph Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A neural network that operates directly on graph-structured data, learning from both node features and connections.</dd>
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
