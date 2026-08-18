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


    <h2>How does it work?</h2>
    <p>Have many candidate points move around, where each point is pulled toward its own best position and the group's best. The group gradually converges on good solutions.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Particle_swarm_optimization">Wikipedia: Particle swarm optimization</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
