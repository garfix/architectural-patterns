<?php
include 'template/data.php';
$pattern = $indexed['Navigation Graph'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The directed graph that represents the pages of an application and their and transitions. It describes the path the user takes through the application.</dd>
    </dl>

    <figure><img src="images/navigation-graph.drawio.png"><figcaption>Navigation Graph</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The user interface of an application can be seen as a finite state machine or as a directed graph, connecting each page to some others.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://signalvnoise.com/posts/1926-a-shorthand-for-designing-ui-flows?30#comments">A shorthand for designing UI flows<a>
        <li><a href="https://blackshellmedia.com/2017/02/16/better-understand-game-ui-flow-diagrams/">Better Understand Your Game Through UI Flow Diagrams<a>

    </ul>
</section>

<?php
include 'template/footer.php';
