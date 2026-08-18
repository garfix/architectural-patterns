<?php
include 'template/data.php';
$pattern = $indexed['Simulated Annealing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <h2>How does it work?</h2>
    <p>Simulated Annealing methods search a space of candidate solutions. They typically define neighbor moves or gradients, evaluate objective functions, and use schedules or memory to escape local optima or to converge reliably.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>VLSI placement — Optimise chip component layouts with a cooling schedule to escape local minima.</li>
        <li>Traveling Salesman approximations — Find near-optimal tours via random neighbour moves and temperature-controlled acceptance.</li>
        <li>Job-shop scheduling — Schedule tasks on machines by accepting worse moves early and reducing acceptance over time.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Simulated_annealing">Wikipedia: Simulated annealing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
