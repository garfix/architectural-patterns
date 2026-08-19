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
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Dynamic programming solves problems by computing and reusing solutions to overlapping subproblems. Implementations are either memoized recursion or iterative table filling; identify state variables and transitions, and ensure an ordering that respects dependencies to compute bottom-up.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Sequence alignment — Compute optimal alignments in bioinformatics (Needleman–Wunsch) using DP matrices.</li>
        <li>Knapsack and resource allocation — Exact DP solutions for constrained optimisation over item choices.</li>
        <li>Optimal control (discrete) — Bellman backups for finite-horizon decision processes and value iteration.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Exponential memory use when the state space is large</li>
        <li>Identifying correct overlapping subproblems and recurrence relations</li>
        <li>Doesn't apply cleanly to problems lacking optimal substructure</li>
        <li>Off-by-one and boundary condition bugs in table initialization</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Dynamic_programming">Wikipedia: Dynamic programming</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
