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


    <h2>How does it work?</h2>
    <p>Keep a group of possible solutions, pick the better ones, mix them together and make small random changes. Repeat to get progressively better solutions.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Genetic_algorithm">Wikipedia: Genetic algorithm</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
