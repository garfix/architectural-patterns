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
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>MCMC constructs a sequence of proposals across the space and accepts or rejects them so that long runs produce samples from the desired distribution. Core steps: propose a move, compute acceptance probability, accept or reject, and repeat. Practical issues include burn-in, mixing, and autocorrelation which determine how many samples to keep or thin.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Bayesian posterior sampling — Use MCMC (e.g., Metropolis-Hastings, Gibbs) to draw samples from complex posterior distributions in hierarchical models.</li>
        <li>Topic modelling (LDA) — Use collapsed Gibbs sampling to infer topic assignments for documents at scale.</li>
        <li>Phylogenetic inference — Sample tree-space posterior distributions for evolutionary models where direct computation is impossible.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Slow mixing/convergence, especially in high dimensions</li>
        <li>Detecting when the chain has actually converged (burn-in diagnosis)</li>
        <li>Autocorrelation between samples reducing effective sample size</li>
        <li>Getting stuck in a single mode of a multimodal distribution</li>
        <li>Tuning proposal distributions or step sizes for efficient exploration</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_chain_Monte_Carlo">Wikipedia: Markov chain Monte Carlo</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
