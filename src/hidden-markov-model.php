<?php
include 'template/data.php';
$pattern = $indexed['Hidden Markov Model'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Hidden Markov Model (HMM) is like a Markov chain but with a twist: you can't see the true underlying states directly. Instead, you see noisy observations that depend on those hidden states. HMMs combine a state-transition model (how states evolve) with an observation model (how states produce outputs) and use algorithms to infer the most likely hidden states. HMMs are useful for sequence problems where the true cause is latent, e.g., speech recognition. They differ from plain Markov chains by requiring inference over unobserved variables.</dd>
    </dl>
    <?php showImage($pattern) ?>
<h2>How does it work?</h2>
    <p>Hidden Markov Model algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Speech recognition — Model phoneme sequences and noisy acoustic observations to decode spoken words in ASR systems.</li>
        <li>Part-of-speech tagging — Infer POS tags for words in sentences by modelling tag transitions and word emissions.</li>
        <li>User activity modelling — Infer latent user states from clickstreams to personalise recommendations or detect churn.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Choosing the right number of hidden states without overfitting</li>
        <li>Local optima during Baum-Welch/EM training</li>
        <li>Slow inference (Viterbi/forward-backward) on long sequences</li>
        <li>Poor performance when observations don't fit the emission distribution assumed</li>
        <li>Label/state interpretability once the model is trained</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hidden_Markov_model">Wikipedia: Hidden Markov model</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
