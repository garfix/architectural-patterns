<?php
include 'template/data.php';
$pattern = $indexed['Generative Adversarial Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Pits two neural networks against each other until the generator produces convincing results.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Generative_adversarial_network">Wikipedia: Generative Adversarial Network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
