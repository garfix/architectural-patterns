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

    <h2>How does it work?</h2>
    <p>Encodes domain knowledge as rules or facts and uses an inference engine to apply those rules to facts to derive conclusions or recommendations.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Expert_system">Wikipedia: Expert system</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
