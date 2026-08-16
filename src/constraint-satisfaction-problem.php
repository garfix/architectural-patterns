<?php
include 'template/data.php';
$pattern = $indexed['Constraint Satisfaction Problem'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Finds values for a set of variables that simultaneously satisfy all given constraints.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Constraint_satisfaction_problem">Wikipedia: Constraint satisfaction problem</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
