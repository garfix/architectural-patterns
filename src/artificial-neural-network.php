<?php
include 'template/data.php';
$pattern = $indexed['Artificial Neural Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A layered network of simple computing units that learns complex, non-linear patterns from labeled examples.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Neural_network_(machine_learning)">Wikipedia: Artificial neural network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
