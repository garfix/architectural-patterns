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
    <p>Ant Colony Optimization methods maintain a population of candidates and use variation (mutation/crossover) and selection to improve fitness over generations. Implementations manage representation encoding, selection pressure, and diversity to avoid premature convergence; often parallel evaluations are used to speed up fitness computation.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Vehicle routing — Use pheromone trails to bias constructive heuristics for practical routing problems.</li>
        <li>Network routing protocols — Heuristic path selection inspired by ants for adaptive routing in communication networks.</li>
        <li>Combinatorial optimisation benchmarks — Apply ACO to TSP variants and graph-based optimisation tasks.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Slow convergence on large problem instances</li>
        <li>Pheromone parameter tuning (evaporation rate, weighting) is finicky</li>
        <li>Risk of stagnation around a suboptimal path</li>
        <li>High computational overhead compared to simpler heuristics</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Ant_colony_optimization_algorithms">Wikipedia: Ant colony optimization</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
