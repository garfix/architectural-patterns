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
    <p>Make small changes that improve the solution. Keep changing until no small change makes it better. If you get stuck, try starting from a different place.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hill_climbing">Wikipedia: Hill climbing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
