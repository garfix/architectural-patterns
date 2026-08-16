<?php
include 'template/data.php';
$pattern = $indexed['Ant Colony Optimization'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Simulates ants laying and following pheromone trails to find efficient paths, useful for routing problems.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Ant_colony_optimization_algorithms">Wikipedia: Ant colony optimization</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
