<?php
include 'template/data.php';
$pattern = $indexed['Expert System'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Encodes human expert knowledge as a set of explicit if-then rules to make decisions or diagnoses.</dd>
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
