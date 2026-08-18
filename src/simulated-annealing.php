<?php
include 'template/data.php';
$pattern = $indexed['Simulated Annealing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <h2>How does it work?</h2>
    <p>Try random changes to a solution and sometimes accept worse changes early on to avoid getting stuck. Gradually become more strict so the search settles on a good solution.</p>
    <dl>
        <dt>Definition</dt>
        <dd>Simulated Annealing searches for good solutions by making random changes and sometimes accepting worse solutions early on, then slowly reducing that randomness. The idea mirrors physical annealing where cooling lets a material settle into a low-energy state. It's a way to escape local optima by accepting occasional bad moves, unlike pure hill-climbing which only accepts improvements. It differs from gradient-based methods because it's derivative-free and can jump across the search space more freely.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Simulated_annealing">Wikipedia: Simulated annealing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
