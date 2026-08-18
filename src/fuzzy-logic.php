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
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Fuzzy_logic">Wikipedia: Fuzzy logic</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
