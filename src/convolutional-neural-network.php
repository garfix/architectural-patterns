<?php
include 'template/data.php';
$pattern = $indexed['Convolutional Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Convolutional Neural Networks (CNNs) are specialized ANNs that scan local patterns across structured inputs like images. Convolution layers detect local features (edges, textures) and pooling reduces spatial size while preserving signals. Think of sliding small filters over an image and learning which patterns matter. CNNs differ from dense networks by exploiting spatial locality and parameter sharing, making them ideal for images and grid-like data.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Scan small patches of an image to find simple patterns, then combine those simple patterns in deeper layers to recognise more complex shapes. This makes it good for images.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Convolutional_neural_network">Wikipedia: Convolutional neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
