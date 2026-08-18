<?php
include 'template/data.php';
$pattern = $indexed['Self-Organizing Map'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Self-Organizing Map (SOM) is a neural-network-like method that maps high-dimensional data onto a low-dimensional grid while preserving topology: similar inputs end up near each other. Picture arranging nodes on a grid so that they represent different clusters of the data. SOMs differ from other clustering and embedding techniques by providing a structured grid that can be visualized and interpreted.</dd>
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
