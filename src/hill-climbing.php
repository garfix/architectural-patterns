<?php
include 'template/data.php';
$pattern = $indexed['Hill Climbing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Hill Climbing repeatedly moves from a solution to a better neighboring solution until no improvement is found. It's simple and fast but can get stuck in local optima. Think of taking small steps uphill until the slope levels out. It differs from stochastic or global methods (like simulated annealing or genetic algorithms) because it accepts only improvements and does not explore broadly, so it's best for smooth landscapes or when combined with restarts.</dd>
    </dl>
    <?php showImage($pattern) ?>

    



    <h2>How does it work?</h2>
    <p>Hill Climbing methods search a space of candidate solutions. They typically define neighbor moves or gradients, evaluate objective functions, and use schedules or memory to escape local optima or to converge reliably.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Local optimisation for hyperparameters — Greedy local search for small discrete hyperparameter spaces where gradients aren't available.</li>
        <li>Feature selection — Iteratively add/remove features and keep moves that improve validation score.</li>
        <li>Layout tuning — Iterative improvement of UI layouts or floor plans with small neighbor edits.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Getting trapped in local maxima</li>
        <li>Plateaus where neighboring states have equal value, causing stalling</li>
        <li>Ridges that require indirect moves the algorithm can't find</li>
        <li>No mechanism to escape once stuck, unlike simulated annealing</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hill_climbing">Wikipedia: Hill climbing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
