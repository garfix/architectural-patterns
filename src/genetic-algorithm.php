<?php
include 'template/data.php';
$pattern = $indexed['Genetic Algorithm'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Genetic Algorithms (GAs) evolve a population of candidate solutions using selection, crossover, and mutation. Over generations, better solutions tend to survive and recombine. S, picture many solutions as a population of strings that mate and mutate so they gradually improve. GAs differ from gradient methods because they don't use derivatives — they explore via population diversity and randomized operators, which helps on rugged or discrete search spaces where gradients don't exist.</dd>
    </dl>
    <?php showImage($pattern) ?>

    



    <h2>How does it work?</h2>
    <p>Keep a group of possible solutions, pick the better ones, mix them together and make small random changes. Repeat to get progressively better solutions.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Genetic_algorithm">Wikipedia: Genetic algorithm</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
