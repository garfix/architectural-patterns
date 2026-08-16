<?php
include 'template/data.php';
$pattern = $indexed['Tabu Search'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A local search method that avoids revisiting recently tried solutions to escape getting stuck.</dd>
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
