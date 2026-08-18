<?php
include 'template/data.php';
$pattern = $indexed['Evolution Strategy'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Evolution Strategies (ES) are evolutionary methods focused on optimizing continuous parameters and often adapt mutation scales automatically. They evolve a small population and tune how much they explore as they go. S, picture gradually adjusting both candidate solutions and how wildly you mutate them to balance exploration and refinement. ES differs from simple GAs by emphasizing self-adaptation for mutation rates and being particularly effective for continuous, real-valued optimization tasks.</dd>
    </dl>
    <?php showImage($pattern) ?>

    



    <h2>How does it work?</h2>
    <p>Evolution Strategy methods maintain a population of candidates and use variation (mutation/crossover) and selection to improve fitness over generations. Implementations manage representation encoding, selection pressure, and diversity to avoid premature convergence; often parallel evaluations are used to speed up fitness computation.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Continuous parameter optimisation — Tune high-dimensional continuous controller weights via mutation and selection.</li>
        <li>Neuroevolution (weights) — Evolve neural network weights for control tasks where gradient signals are noisy.</li>
        <li>Robust design — Search for parameter settings that perform well under varying simulated conditions.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Evolution_strategy">Wikipedia: Evolution strategy</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
