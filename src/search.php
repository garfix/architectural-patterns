<?php
include 'template/data.php';
$pattern = $indexed['Search'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>In a search space, find a path from intial state to goal state.</dd>
    </dl>
    <p>
        Search space is any type of problem that can be modelled as a directed graph.
    </p>

    <figure><img src="images/search.drawio.png"><figcaption>Search architecture diagram</figcaption></figure>

    <p>
        Many problems can be modelled as a graph. In chess, for example, the first line-up of pieces can be seens as the start node, each possible move from there as a node that is linked to the start node, and so on. Search starts with the start node. It finds its neighboring nodes and checks if one of them is the goal. If so, the path to the goal is returned. If not, the new path is added to the todo list of paths: the fronteer.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Shortest path algorithm
        <li>Chess
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>If there's no known algorithm to solve the problem more efficiently
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Search can be slow, hence it can be useful to add known shortcuts in the form of heuristics.
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Search_problem">Wikipedia</a>
    </ol>
</section>

<?php
include 'template/footer.php';
