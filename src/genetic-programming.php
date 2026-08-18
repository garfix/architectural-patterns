<?php
include 'template/data.php';
$pattern = $indexed['Genetic Programming'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Genetic Programming (GP) extends GAs by evolving computer programs or expressions rather than fixed-length candidate vectors. Solutions are trees or code fragments that are recombined and mutated. Think of breeding small programs until one solves your task. GP differs from GAs by producing executable structures (trees of operations) and is useful when the solution form itself is unknown; it's heavier computationally but flexible for symbolic problems.</dd>
    </dl>
    <?php showImage($pattern) ?>

    



    <h2>How does it work?</h2>
    <p>Genetic Programming methods maintain a population of candidates and use variation (mutation/crossover) and selection to improve fitness over generations. Implementations manage representation encoding, selection pressure, and diversity to avoid premature convergence; often parallel evaluations are used to speed up fitness computation.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Genetic_programming">Wikipedia: Genetic programming</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
