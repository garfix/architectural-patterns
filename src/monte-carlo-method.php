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

    <h2>How does it work?</h2>
    <p>Use random samples to estimate an answer. Run many trials, measure the result in each trial, and average them. More trials usually give a better estimate.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Monte_Carlo_method">Wikipedia: Monte Carlo method</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
