<?php
include 'template/data.php';
$pattern = $indexed['Heuristic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A technique designed for problem solving more quickly when classic methods are too slow for finding an exact or approximate solution.</dd>
    </dl>

    <figure><img alt="" src="images/heuristic.drawio.png"><figcaption>Heuristic</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        When no algorithm can be made that delivers an answer fast enough, and if the domain allows it, a heuristic can provide a solution that is <i>good enough</i>.
    </p>
    <p>
        A heuristic is a <i>rule of thumb</i> that is common in engineering. It provides a solution that is good enough in a specific case.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Traveling Salesman Problem (TSP) Heuristic - Nearest Neighbor
        <li>Anti-virus software tries to find viruses by pattern matching
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When a rigourous algorithm is too slow
        <li>When an inexact, yet good enough, solution is acceptable
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Heuristic_(computer_science)">Wikipedia on heuristic<a>
    </ul>
</section>

<?php
include 'template/footer.php';
