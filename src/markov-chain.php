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
    <figure><img alt="" src="images/markov-chain.drawio.png"><figcaption>Markov chain (states and transition probabilities)</figcaption></figure>

    <h2>How does it work?</h2>
    <p>A Markov chain shows how a system moves between a set of states. Each step only depends on the current state. To use it, list possible states and the chances of moving between them, then run the chain many times to see typical outcomes.</p>

    <h2>Examples</h2>
    <ul>
        <li>Weather forecasting: a model with states such as sunny, cloudy, and rainy, where tomorrow's weather depends mostly on today's conditions.
        <li>Web browsing: a user moves between pages by following links, and the chain estimates the likely sequence of page visits over time.
        <li>Speech recognition: hidden or inferred states represent phonemes or words, with the observable sound sequence guiding the likely transitions.
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_chain">Wikipedia: Markov chain</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
