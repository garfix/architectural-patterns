<?php
$title = "Monolith";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Monolith</h1>
    </header>
    <dl>
        <dt>Definition</dt>
        <dd>A monolith is a non-distributed application: all services it uses are internal to the application.</dd>
    </dl>

    <figure><img src="images/monolith.drawio.png"><figcaption>Monolith architecture diagram</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Word processor
    </ul>

    <h2>When should you use it?</h2>
    <p>
        A monolith can be structured, just like a distributed application. The difference is that these structures (modules) are internal and hence cannot be used by other applications. If this reuse is not needed, a monolith brings the added advantage of just being simpler to build and maintain.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Monolithic_application">Wikipedia</a>
    </ul>
</section>

<?php
include 'template/footer.php';
