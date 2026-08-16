<?php
include 'template/data.php';
$pattern = $indexed['Autoencoder'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A neural network trained to compress data down and then reconstruct it, learning a compact representation.</dd>
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
