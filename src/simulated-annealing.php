<?php
include 'template/data.php';
$pattern = $indexed['Simulated Annealing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <h2>How does it work?</h2>
    <p>Simulated Annealing methods search a space of candidate solutions. They typically define neighbor moves or gradients, evaluate objective functions, and use schedules or memory to escape local optima or to converge reliably.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Simulated_annealing">Wikipedia: Simulated annealing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
