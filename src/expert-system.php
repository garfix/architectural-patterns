<?php
include 'template/data.php';
$pattern = $indexed['Expert System'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An Expert System encodes human expertise as explicit if-then rules and uses rule engines to make decisions or diagnoses. Think of a large set of condition-action pairs that emulate an expert's reasoning process. Expert systems differ from statistical ML because they rely on explicit rules designed by humans rather than learned from data — they are interpretable but brittle when rules don't cover edge cases.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Expert System methods manipulate symbols or rules: represent knowledge explicitly, and apply inference algorithms (forward/backward chaining, constraint propagation, search). Implementations focus on rule ordering, conflict resolution, and efficient indexing of facts.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Medical diagnostic checklists — Encode clinical heuristics as rules to provide decision support for common conditions.</li>
        <li>Configuration management — Rule engines that validate system configurations and propose fixes.</li>
        <li>Loan eligibility rules — Deterministic rule sets for initial screening in financial services.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Expert_system">Wikipedia: Expert system</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
