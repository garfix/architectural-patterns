<?php
include 'template/data.php';
$pattern = $indexed['Autoencoder'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An Autoencoder compresses input into a compact latent representation and decodes it to reconstruct the original. It's used for dimensionality reduction, denoising, and representation learning. Picture an encoder that translates data into a smaller code and a decoder that reconstructs it; training minimizes reconstruction error. Autoencoders differ from supervised models because they don't need labels, and from VAEs because standard autoencoders don't impose probabilistic structure on the latent space.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>An encoder compresses input into a compact code and a decoder reconstructs the input; training minimizes reconstruction error to learn useful representations.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Autoencoder">Wikipedia: Autoencoder</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
