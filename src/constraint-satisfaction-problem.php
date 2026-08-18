<?php
include 'template/data.php';
$pattern = $indexed['Constraint Satisfaction Problem'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Constraint Satisfaction Problem (CSP) asks for values of variables that satisfy all constraints simultaneously (like Sudoku). Picture setting variable values while checking many rules until everything is consistent. CSP techniques differ from optimization because they focus on feasibility rather than optimizing a numeric objective and often use search with pruning.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Defines variables, domains, and constraints; solvers search or propagate constraints to find assignments that satisfy all constraints.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Constraint_satisfaction_problem">Wikipedia: Constraint satisfaction problem</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
