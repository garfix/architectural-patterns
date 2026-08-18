<?php
include 'template/data.php';
$pattern = $indexed['Recurrent Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Recurrent Neural Networks (RNNs) process sequences by passing information from one step to the next, allowing the network to use past inputs when predicting future ones. Imagine a loop that carries a hidden memory forward through time. RNNs differ from feedforward networks by their temporal dynamics; compared to transformers, basic RNNs struggle with long-range dependencies and training stability.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Processes sequences by maintaining a hidden state that is updated at each timestep, allowing the network to capture temporal dependencies.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Recurrent_neural_network">Wikipedia: Recurrent neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
