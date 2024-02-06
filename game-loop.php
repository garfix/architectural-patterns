<?php
include 'template/data.php';
$pattern = $indexed['Game Loop'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>In video games, a control loop periodically updates the game. When the game is not being updated it is idle.</dd>
    </dl>

    <figure><img src="images/game-loop.drawio.png"><figcaption>Game loop architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        In video games the positions of all moving objects needs to be updated, say 50 times per second, for animations to look smooth. For this reason they contain a timer that fires with this frequency. Each time the timer fires, inputs are processed, the game state is updated, and the new scene is rendered.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Videogames like Pac-man and Doom
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>In games with fluid animations.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>The updater function should be able to complete within 1/50th of a second.
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>A simple timer will do. Each language has its own implementation.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Video_game_programming#Game_structure">Wikipedia: Game structure<a>
    </ul>
</section>

<?php
include 'template/footer.php';
