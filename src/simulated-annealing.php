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
        <dd>Searches for a good solution by allowing occasional worse moves early on, cooling down over time to settle into a strong result.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Simulated_annealing">Wikipedia: Simulated annealing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
