<?php
include 'template/data.php';
$pattern = $indexed['Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A neural network is a layered structure where each layer consists of nodes (artifical neurons). Nodes are linked to other nodes in the same layer, and to nodes of the adjoining layer. Processing takes the form of a series of cycles. In each cycle the values of each node and each link are updated.</dd>
    </dl>

    <p>
        The neural network metaphore is based on the human nervous system that consists of neurons (nerve cells).
    </p>

    <figure><img src="images/neural-network.drawio.png"><figcaption>Neural network architecture diagram</figcaption></figure>

    <p>
        Nodes are typically organized into multiple layers. Neurons of one layer connect only to neurons of the immediately preceding and immediately following layers. The layer that receives external data is the input layer. The layer that produces the ultimate result is the output layer. In between them are zero or more hidden layers. Between two layers, multiple connection patterns are possible. They can be 'fully connected', with every neuron in one layer connecting to every neuron in the next layer. They can be pooling, where a group of neurons in one layer connects to a single neuron in the next layer, thereby reducing the number of neurons in that layer.
    </p>

    <figure><img src="images/neural-net.png"><figcaption>Example neural network - <a href="https://commons.wikimedia.org/wiki/File:Example_of_a_deep_neural_network.png">BrunelloN</a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>, via Wikimedia Commons</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Pattern recognition and prediction
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When a hand-crafted rule based system is not feasible
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>The state of a neural network is unintelligible to a human
        <li>An NN is computationally much more expensive than a rule based system
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Artificial_neural_network">Wikipedia on artificial neural networks</a>
    </ol>

</section>

<?php
include 'template/footer.php';
