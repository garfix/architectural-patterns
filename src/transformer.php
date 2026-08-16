<?php
include 'template/data.php';
$pattern = $indexed['Transformer'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A neural network architecture that weighs the relevance of all parts of an input to each other at once.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Uses self-attention to compute contextualized representations for all positions in parallel, enabling efficient sequence modeling without recurrence.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Transformer_(deep_learning_architecture)">Wikipedia: Transformer</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
