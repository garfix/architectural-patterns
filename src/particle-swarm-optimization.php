<?php
include 'template/data.php';
$pattern = $indexed['Particle Swarm Optimization'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Moves a swarm of candidate solutions through the search space, influenced by personal and neighbors' best finds.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Particle_swarm_optimization">Wikipedia: Particle swarm optimization</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
