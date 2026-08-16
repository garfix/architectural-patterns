<?php
include 'template/data.php';
$pattern = $indexed['A* Search Algorithm'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Finds the shortest path between points by combining actual cost so far with an estimate of remaining cost.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/A*_search_algorithm">Wikipedia: A* search algorithm</a></li>
    </ol>

</section>


        <h2>How does it work?</h2>
        <p>A* finds a shortest path by always exploring the most promising path first, where 'promising' is a mix of how far you've come and a guess of how far remains. Pick a good guess to make the search fast.</p>

<?php
include 'template/footer.php';
