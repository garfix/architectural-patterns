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
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Constraint Satisfaction Problem methods manipulate symbols or rules: represent knowledge explicitly, and apply inference algorithms (forward/backward chaining, constraint propagation, search). Implementations focus on rule ordering, conflict resolution, and efficient indexing of facts.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Exam timetabling — Assign exams to slots and rooms satisfying room capacity and conflict constraints.</li>
        <li>Sudoku solving — Express constraints and solve with backtracking for exact solutions.</li>
        <li>Resource allocation in scheduling — Enforce complex availability and precedence constraints in rostering.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Combinatorial explosion of the search space for large problems</li>
        <li>Choosing effective variable/value ordering heuristics</li>
        <li>Detecting and encoding all real-world constraints correctly</li>
        <li>Backtracking search can be slow without good constraint propagation</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Constraint_satisfaction_problem">Wikipedia: Constraint satisfaction problem</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
