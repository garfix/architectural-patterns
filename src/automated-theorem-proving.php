<?php
include 'template/data.php';
$pattern = $indexed['Automated Theorem Proving'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Automated Theorem Proving uses formal logic and search strategies to prove or disprove mathematical statements automatically. Imagine a solver that applies inference rules systematically to derive conclusions from axioms. It differs from heuristic or statistical methods by operating on symbolic, provable correctness rather than probabilistic guesses.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Automated Theorem Proving methods manipulate symbols or rules: represent knowledge explicitly, and apply inference algorithms (forward/backward chaining, constraint propagation, search). Implementations focus on rule ordering, conflict resolution, and efficient indexing of facts.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Formal verification of hardware — Prove correctness properties of circuits with automated provers.</li>
        <li>Program verification — Check invariants and prove absence of certain classes of bugs in critical code.</li>
        <li>Mathematical proof search — Assist mathematicians by searching formal proof spaces for lemmas and theorems.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Automated_theorem_proving">Wikipedia: Automated theorem proving</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
