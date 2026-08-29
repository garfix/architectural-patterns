<?php
include 'template/data.php';
$pattern = $indexed['Minimax'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Minimax is an algorithm for minimizing the maximum possible loss for opponents in competitive two-player games. It uses a game tree where maximizing players choose moves with the highest score while minimizing opponents choose moves with the lowest score, alternating until leaf nodes are reached.</dd>
    </dl>
    <?php showImage($pattern) ?>

    <h2>How does it work?</h2>
    <p>
        The minimax algorithm operates on a game tree representing all possible moves and counter-moves. At each level of the tree, players alternate between maximizing their score and minimizing their opponent's score. The algorithm assumes both players play optimally.
    </p>
    <p>
        Key characteristics of games suitable for minimax:
    </p>
    <ul>
        <li><strong>No cycles</strong> - The game cannot return to a previously seen state</li>
        <li><strong>Perfect information</strong> - Both players know the complete game state</li>
        <li><strong>No chance elements</strong> - No dice or shuffled cards affect outcomes</li>
        <li><strong>Zero-sum</strong> - One player's gain is the other's loss</li>
    </ul>
    
    <h2>Algorithm Steps</h2>
    <ol>
        <li>Generate the complete game tree from current position to terminal states</li>
        <li>Assign utility values to all terminal states (win/lose/draw or numerical scores)</li>
        <li>Work backwards: at minimizing levels, take the minimum of children; at maximizing levels, take the maximum</li>
        <li>Repeat until the root is reached; the best move is the one leading to the highest-valued child</li>
    </ol>

    <h2>Example: A Simple Game</h2>
    <p>
        Consider a game where Alice places a coin on the starting circle. Players alternate moving the coin along lines:
    </p>
    <ul>
        <li>Alice moves first, choosing between connected circles</li>
        <li>Bob moves second, trying to maximize his payoff</li>
        <li>The game ends when the coin reaches a numbered circle</li>
        <li>The number represents how much Alice pays Bob</li>
    </ul>
    <p>
        At each blue (Bob's turn) circle, he chooses the highest value. At each pink (Alice's turn) circle, she chooses the lowest value. This alternating selection propagates up the tree to determine optimal play.
    </p>

    <h2>Variants</h2>
    <ul>
        <li><strong>Maximin</strong> - Maximize the minimum achievable outcome (opposite philosophy)</li>
        <li><strong>Minimin</strong> - Minimize the minimum (not optimal for competitive games)</li>
        <li><strong>Maximax</strong> - Maximize the maximum (optimistic, used in some game AI)</li>
    </ul>

    <h2>Applications</h2>
    <ul>
        <li>Game AI - Chess programs, checkers, tic-tac-toe, go engines</li>
        <li>Election methods - Condorcet method</li>
        <li>Decision theory - Game-theoretic optimization</li>
        <li>Board game engines - Computer opponents in video games</li>
    </ul>

    <h2>Limitations</h2>
    <ul>
        <li>Game trees grow exponentially with depth</li>
        <li>Most practical games (chess, go) have trees too large to explore completely</li>
        <li>Requires pruning techniques (like alpha-beta pruning) for real-world use</li>
        <li>Only works for deterministic, perfect-information, zero-sum games</li>
    </ul>

    <h2>Theorem</h2>
    <p>
        The <strong>Zermelo theorem</strong> in game theory states that any finite, deterministic, perfect-information, two-player game is solvable. This means either:
    </p>
    <ul>
        <li>The first player has a winning strategy</li>
        <li>The second player has a winning strategy</li>
        <li>Both players can force a draw</li>
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Minimax">Wikipedia: Minimax</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Zermelo%27s_theorem_(game_theory)">Wikipedia: Zermelo's theorem</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';