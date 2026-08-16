<?php
include 'template/data.php';
$pattern = $indexed['Self-Organizing Map'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A neural network that arranges itself into a low-dimensional grid, placing similar data near each other.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Maps high-dimensional inputs onto a low-dimensional grid by competitive learning where nearby neurons win and adjust to represent similar inputs.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Self-organizing_map">Wikipedia: Self-Organizing Map</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
