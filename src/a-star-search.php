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
    <?php showImage($pattern) ?>

    


        <h2>How does it work?</h2>
    <p>A* expands nodes from a priority queue ordered by cost-so-far plus heuristic estimate. Implement it by maintaining open and closed sets, updating costs when better paths are found, and ensuring the heuristic is admissible for optimality. Efficient implementations use appropriate data structures for the frontier.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Game AI pathfinding — Find shortest paths for NPCs on grid maps using admissible heuristics like Manhattan distance.</li>
        <li>Robot motion planning — Compute collision-free routes in discretized maps with heuristics to focus search.</li>
        <li>Route planning in maps — Combine road network costs and heuristic estimates for efficient navigation on graphs.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Memory blow-up storing the open/closed sets on large graphs</li>
        <li>Poor performance if the heuristic isn't admissible or well-designed</li>
        <li>Ties and near-equal costs causing unnecessary node expansion</li>
        <li>Difficulty adapting to dynamic graphs where edge weights change</li>
        <li>Heuristic computation itself becoming a bottleneck</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/A*_search_algorithm">Wikipedia: A* search algorithm</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
