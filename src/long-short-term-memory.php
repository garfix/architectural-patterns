<?php
include 'template/data.php';
$pattern = $indexed['Long Short-Term Memory'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>LSTM networks are a type of RNN designed to remember information over longer sequences using gated mechanisms that control information flow. Think of gates that decide what to keep, forget, or output, so the model can learn long-term dependencies. LSTMs differ from vanilla RNNs by addressing vanishing gradients and from transformers by being sequential rather than relying on global attention.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Uses gated recurrent cells (input, forget, output) to control information flow and preserve long-term dependencies in sequences.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Long_short-term_memory">Wikipedia: Long Short-Term Memory</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
