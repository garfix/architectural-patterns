<?php
include 'template/data.php';
$pattern = $indexed['Genetic Programming'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Evolves actual computer programs or expressions using evolutionary operators.</dd>
    </dl>


    <h2>How does it work?</h2>
    <p>Start with many small programs, test how well they solve the problem, and keep and combine the best ones. Over time the programs become better at the task.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Genetic_programming">Wikipedia: Genetic programming</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
