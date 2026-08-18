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
    <p>Convolutional networks apply learned filters locally across the input to detect patterns; pooling and hierarchical depth let them compose local features into global concepts. Training uses backpropagation with data augmentation and regularisation.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Object detection — Train CNN backbones for detectors used in autonomous driving and surveillance.</li>
        <li>Medical image segmentation — U-Net style CNNs for delineating tissue boundaries in radiology.</li>
        <li>Style transfer — Use convolutional features to manipulate visual style while preserving content.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Convolutional_neural_network">Wikipedia: Convolutional neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
