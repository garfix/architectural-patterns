<?php
include 'template/data.php';
$pattern = $indexed['Generative Adversarial Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A GAN trains two networks: a generator that creates fake samples and a discriminator that tries to tell real from fake. They compete until the generator produces convincing outputs. S, picture a forger improving to fool a detective. GANs differ from likelihood-based generative models (like VAEs) because they don't optimize an explicit probability; training can be unstable but often yields sharp, realistic samples.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Generative Adversarial Network architectures are specialised neural designs; they define layer types and connectivity that bias the model to particular data structures. Implementations balance depth, width, and compute considerations for practical training.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Generative_adversarial_network">Wikipedia: Generative Adversarial Network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
