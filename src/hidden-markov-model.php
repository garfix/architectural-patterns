<?php
include 'template/data.php';
$pattern = $indexed['Hidden Markov Model'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Markov chain where the true states are unobserved and must be inferred from observable outputs.</dd>
    </dl>

    <figure><img alt="" src="images/hidden-markov-model.png"><figcaption>Hidden Markov Model</figcaption></figure>

    <h2>How does it work?</h2>
    <p>There are states you cannot see directly, but you observe outputs that depend on those states. By looking at the observed outputs, you try to guess the hidden states and how likely each one is.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hidden_Markov_model">Wikipedia: Hidden Markov model</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
