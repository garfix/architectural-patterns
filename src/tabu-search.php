<?php
include 'template/data.php';
$pattern = $indexed['Tabu Search'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Tabu Search enhances local search by keeping a short-term memory (the tabu list) of recently visited solutions or moves to avoid cycling back. This lets the search explore new areas and escape local optima. Imagine keeping a short "do not revisit" list while trying neighboring changes, which helps avoid loops. It differs from plain hill-climbing by actively forbidding recent moves, and from population-based methods by focusing on a single evolving solution rather than many candidates.</dd>
    </dl>


    <h2>How does it work?</h2>
    <p>Like hill climbing, but keep a short memory of recent moves so you do not repeat them. This helps explore more of the search space and avoid simple loops.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Tabu_search">Wikipedia: Tabu search</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
