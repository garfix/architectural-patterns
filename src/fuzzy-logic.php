<?php
include 'template/data.php';
$pattern = $indexed['Fuzzy Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Fuzzy Logic allows reasoning with degrees of truth instead of strict true/false values, enabling rules like "if temperature is somewhat high, then reduce heating moderately." s, think of smooth thresholds and graded rules instead of binary ones. Fuzzy systems differ from classical logic-based systems by modeling vagueness explicitly, making them useful in control systems and human-centric rules.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Fuzzy Logic methods manipulate symbols or rules: represent knowledge explicitly, and apply inference algorithms (forward/backward chaining, constraint propagation, search). Implementations focus on rule ordering, conflict resolution, and efficient indexing of facts.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Washing machine controllers — Smoothly map sensor values to control signals with fuzzy rules for robust behaviour.</li>
        <li>Consumer product scoring — Combine subjective metrics with fuzzy membership to compute overall ratings.</li>
        <li>Control systems with imprecise inputs — Handle linguistic rules (e.g., 'slightly hot') in HVAC control.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Designing membership functions is subjective and hard to validate</li>
        <li>Rule base can grow unwieldy as the number of variables increases</li>
        <li>Difficult to formally prove correctness or stability of the system</li>
        <li>Tuning is often ad hoc rather than principled</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Fuzzy_logic">Wikipedia: Fuzzy logic</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
