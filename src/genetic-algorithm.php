<?php
include 'template/data.php';
$pattern = $indexed['Genetic Algorithm'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Evolves a population of candidate solutions through selection, crossover, and mutation.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Genetic_algorithm">Wikipedia: Genetic algorithm</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
