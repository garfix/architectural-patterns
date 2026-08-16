<?php
include 'template/data.php';
$pattern = $indexed['Linear Programming'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Finds the best outcome in a model with linear relationships and constraints.</dd>
    </dl>


    <h2>How does it work?</h2>
    <p>Write your goal as a linear formula and list linear limits (constraints). A solver finds the best numbers that meet the limits and give the best goal. Use existing solvers rather than writing your own.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Linear_programming">Wikipedia: Linear programming</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
