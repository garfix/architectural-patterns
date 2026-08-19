<?php
include 'template/data.php';
$pattern = $indexed['Particle Swarm Optimization'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Particle Swarm Optimization (PSO) moves a swarm of particles through the search space where each particle adjusts its position based on its own experience and that of its neighbors. S, imagine many points flying over the landscape, sharing information about the best places they've seen. PSO differs from evolutionary algorithms by using velocity updates and social sharing rather than crossover/mutation; it's often simpler to tune and works well for continuous optimization.</dd>
    </dl>
    <?php showImage($pattern) ?>

    



    <h2>How does it work?</h2>
    <p>Particle Swarm Optimization methods maintain a population of candidates and use variation (mutation/crossover) and selection to improve fitness over generations. Implementations manage representation encoding, selection pressure, and diversity to avoid premature convergence; often parallel evaluations are used to speed up fitness computation.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Hyperparameter tuning — Optimize continuous hyperparameters (e.g., learning rates) across a search space using PSO.</li>
        <li>Antenna array calibration — Find parameter settings that maximise signal metrics via swarm-based search.</li>
        <li>Continuous engineering design — Search continuous design variables for aerodynamic or structural objectives.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Premature convergence when particles cluster too quickly</li>
        <li>Sensitive to inertia weight and acceleration coefficient tuning</li>
        <li>Struggles in very high-dimensional search spaces</li>
        <li>No strong theoretical convergence guarantees</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Particle_swarm_optimization">Wikipedia: Particle swarm optimization</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
