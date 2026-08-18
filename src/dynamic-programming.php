<?php
include 'template/data.php';
$pattern = $indexed['Dynamic Programming'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Dynamic Programming (DP) solves complex problems by breaking them into overlapping subproblems and reusing solved sub-results (memoization). It turns exponential problems into polynomial-time ones when overlapping structure exists. Think of computing Fibonacci numbers once and saving them instead of recalculating. DP differs from greedy or divide-and-conquer methods by exploiting repeated subproblems and optimal substructure; it's deterministic and exact when applicable.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Split a big problem into smaller parts, solve each small part once, and reuse those results to build the full solution. This avoids repeating the same work over and over.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Dynamic_programming">Wikipedia: Dynamic programming</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
