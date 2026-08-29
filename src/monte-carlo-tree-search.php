<?php
include 'template/data.php';
$pattern = $indexed['Monte Carlo Tree Search'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Monte Carlo Tree Search (MCTS) is a heuristic tree search algorithm for decision processes, most notably used in game-playing programs. It combines random sampling of game outcomes with tree search to find optimal decisions without requiring explicit evaluation functions.</dd>
    </dl>
    <?php showImage($pattern) ?>

    <h2>How does it work?</h2>
    <p>
        MCTS builds a search tree incrementally by simulating random games from the current position. Unlike minimax, it doesn't need to explore the entire game tree—instead, it focuses on the most promising moves based on accumulated statistics.
    </p>
    <p>
        The algorithm balances two competing goals:
    </p>
    <ul>
        <li><strong>Exploration</strong> - Try less-visited nodes to discover potentially better moves</li>
        <li><strong>Exploitation</strong> - Focus on known good moves that have yielded positive results</li>
    </ul>

    <h2>The Four Phases</h2>
    <p>
        Each iteration of MCTS consists of four phases:
    </p>

    <ol>
        <li>
            <strong>Selection</strong><br>
            Starting from the root, select child nodes using a tree policy (typically UCB1: Upper Confidence Bound) until reaching a node that hasn't been fully expanded or is terminal.
        </li>
        <li>
            <strong>Expansion</strong><br>
            Add one or more child nodes to the selected node to represent possible future moves.
        </li>
        <li>
            <strong>Simulation (Rollout)</strong><br>
            Play out the game randomly from the new node until reaching a terminal state or predefined depth.
        </li>
        <li>
            <strong>Backpropagation</strong><br>
            Update the statistics (win/loss counts) for all nodes along the path from the new node back to the root.
        </li>
    </ol>

    <h2>Applications</h2>
    <ul>
        <li><strong>Game AI</strong> - Chess, Shogi, Go, Checkers, Backgammon</li>
        <li><strong>Video Games</strong> - Turn-based strategy games (e.g., Total War AI)</li>
        <li><strong>Automated Theorem Proving</strong></li>
        <li><strong>General Game Playing</strong></li>
        <li><strong>Planning under uncertainty</strong></li>
    </ul>

    <h2>Advantages</h2>
    <ul>
        <li>No need for domain-specific evaluation functions</li>
        <li>Works well with large branching factors (like Go)</li>
        <li>Anytime algorithm—can be stopped at any time</li>
        <li>Handles both perfect and imperfect information games</li>
    </ul>

    <h2>Limitations</h2>
    <ul>
        <li>Requires many simulations for accuracy</li>
        <li>Memory-intensive for deep games</li>
        <li>May struggle in games with strong tactical elements</li>
        <li>Performance depends on simulation quality</li>
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Monte_Carlo_tree_search">Wikipedia: Monte Carlo Tree Search</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';