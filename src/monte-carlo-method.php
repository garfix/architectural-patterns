<?php
include 'template/data.php';
$pattern = $indexed['Monte Carlo Method'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>

        <dd>Monte Carlo methods estimate answers by sampling randomly and averaging results. If a problem is too complex to solve exactly, you can simulate many random trials and use the distribution of outcomes to approximate quantities like probabilities or integrals. Imagine estimating π by throwing darts at a square and counting how many land inside a circle. Monte Carlo differs from exact analytic solvers and from optimization methods: it's about statistical approximation using randomness rather than deterministic equations.</dd>
    </dl>
    <?php showImage($pattern) ?>

    <h2>How does it work?</h2>
    <p>Monte Carlo Method algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Option pricing — Simulate many price paths to estimate the expected payoff of financial derivatives like European options.</li>
        <li>Light transport in rendering — Estimate global illumination by randomly sampling light paths for realistic image synthesis.</li>
        <li>Uncertainty propagation — Approximate integrals or expectations where analytic solutions are intractable (engineering risk assessments).</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Monte_Carlo_method">Wikipedia: Monte Carlo method</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
