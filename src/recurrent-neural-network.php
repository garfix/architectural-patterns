<?php
include 'template/data.php';
$pattern = $indexed['Recurrent Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A neural network with loops that lets it carry information forward through a sequence.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Processes sequences by maintaining a hidden state that is updated at each timestep, allowing the network to capture temporal dependencies.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Recurrent_neural_network">Wikipedia: Recurrent neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
