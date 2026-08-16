<?php
include 'template/data.php';
$pattern = $indexed['Convolutional Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A neural network that scans small local patterns across an image or grid-like data.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Convolutional_neural_network">Wikipedia: Convolutional neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
