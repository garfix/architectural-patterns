<?php
include 'template/data.php';
$pattern = $indexed['Markov Chain'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Markov chain models a process that moves through states step by step where each step depends only on the current state, not the full past. Practically, it's like a simple rule that says “given where I am now, here are the chances of moving to each next place.” This differs from more complex sequence models (like hidden Markov models) because a plain Markov chain assumes you can observe the states directly and don't need to infer hidden information. Use it when the "memory" of the system is limited to the present.</dd>
    </dl>
    <?php showImage($pattern) ?>
<h2>How does it work?</h2>
    <p>Markov Chain algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>

    <h2>Examples</h2>
    <ul>
        <li>Practical inference — Estimate parameters or states from noisy data in applied systems.</li>
        <li>Sensor fusion — Combine multiple noisy measurements into a single estimate.</li>
        <li>A/B analysis — Update beliefs about variants using observed outcomes.</li>
    </ul>



    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_chain">Wikipedia: Markov chain</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
