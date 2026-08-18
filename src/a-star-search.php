<?php
include 'template/data.php';
$pattern = $indexed['A* Search Algorithm'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A* is a pathfinding algorithm that finds the least-cost path between nodes by combining the cost so far with a heuristic estimate of remaining cost. It is efficient and optimal when the heuristic is admissible (never overestimates). S, visualize expanding nodes in a grid while using a guess for distance-to-go; A* prioritizes nodes that look promising. It differs from uninformed searches (like Dijkstra) by using heuristics to guide the search and from local optimizers that don't guarantee shortest overall paths.</dd>
    </dl>

        <h2>How does it work?</h2>
        <p>A* finds a shortest path by always exploring the most promising path first, where 'promising' is a mix of how far you've come and a guess of how far remains. Pick a good guess to make the search fast.</p>

        <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/A*_search_algorithm">Wikipedia: A* search algorithm</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
