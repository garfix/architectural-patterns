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
    <p>There are states you cannot see directly, but you observe outputs that depend on those states. By looking at the observed outputs, you try to guess the hidden states and how likely each one is.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hidden_Markov_model">Wikipedia: Hidden Markov model</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
