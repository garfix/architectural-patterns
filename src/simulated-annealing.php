<?php
include 'template/data.php';
$pattern = $indexed['Simulated Annealing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

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
