<?php
include 'template/data.php';
$pattern = $indexed['Ant Colony Optimization'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Ant Colony Optimization (ACO) simulates ants laying pheromones on paths: good routes get reinforced and become more likely to be followed. Over time, the colony converges to efficient paths for routing and combinatorial problems. Think of many simple agents leaving traces that bias future choices. ACO differs from single-solution local search by using collective indirect communication (stigmergy) and is particularly well-suited to routing and combinatorial optimization.</dd>
    </dl>
    <?php showImage($pattern) ?>

    



    <h2>How does it work?</h2>
    <p>Simulate many simple agents that try solutions and leave a marker when they find a good one. Over time the markers guide more agents to the better solutions.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Ant_colony_optimization_algorithms">Wikipedia: Ant colony optimization</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
