<?php
include 'template/data.php';
$pattern = $indexed['Markov Chain Monte Carlo'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Draws samples from a complicated probability distribution by constructing a Markov chain that gradually converges to it.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
    <h2>How does it work?</h2>
    <p>Create a random process that eventually produces samples similar to the distribution you care about. Run it for a while, ignore the first few samples, then collect many samples to estimate properties of the distribution.</p>

        <li><a href="https://en.wikipedia.org/wiki/Markov_chain_Monte_Carlo">Wikipedia: Markov chain Monte Carlo</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
