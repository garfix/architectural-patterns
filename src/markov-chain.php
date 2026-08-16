<?php
include 'template/data.php';
$pattern = $indexed['Markov Chain'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Models a system as a sequence of states where the next state depends only on the current one.</dd>
    </dl>
    <figure><img alt="" src="images/markov-chain.svg"><figcaption>Markov chain (states and transition probabilities)</figcaption></figure>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_chain">Wikipedia: Markov chain</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
