<?php
include 'template/data.php';
$pattern = $indexed['Markov Chain Monte Carlo'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Markov Chain Monte Carlo (MCMC) builds a Markov chain whose equilibrium distribution matches a complex probability distribution you want to sample from. You run the chain long enough and collect samples that approximate the target distribution. S, MCMC is handy when direct sampling is hard; it uses local moves to explore probability space. Unlike simple Monte Carlo, which samples independently, MCMC samples are correlated but allow exploration of high-dimensional distributions that would otherwise be infeasible.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Create a random process that eventually produces samples similar to the distribution you care about. Run it for a while, ignore the first few samples, then collect many samples to estimate properties of the distribution.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_chain_Monte_Carlo">Wikipedia: Markov chain Monte Carlo</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
