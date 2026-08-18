<?php
include 'template/data.php';
$pattern = $indexed['Transformer'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Transformers use attention mechanisms to let every part of the input interact directly with every other part, enabling parallel computation and effective handling of long-range dependencies. Imagine each token in a sequence asking "how much should I listen to each other token?" Transformers differ from RNNs by avoiding recurrence and from CNNs by using attention instead of local filters; this design underpins modern large language models.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Transformers compute self-attention between all positions so each token builds a context-aware representation; stacking attention and feed-forward blocks and training with large batches leads to strong sequence models. Implementation focuses on attention masks, positional encoding, and efficient batched matrix operations.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Transformer_(deep_learning_architecture)">Wikipedia: Transformer</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
