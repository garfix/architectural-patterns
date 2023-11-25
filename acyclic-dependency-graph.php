<?php
include 'template/data.php';
$pattern = $indexed['Acyclic Dependency Graph'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A directed acyclic graph of module dependencies</dd>
    </dl>

    <figure><img src="images/dependency-graph.drawio.png"><figcaption>Acyclic Dependency Graph</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Most programming languages have an <b>import</b> function that allows one module to use the code from another module. These imports together form a graph.
    </p>
    <p>
        Graphs can form cycles and the same goes for module imports, but in general it's a good thing to strive for unidirectional dependencies: they provide conceptual clarity and make code easier to maintain.
    </p>
    <p>
        There is a <a href="https://en.wikipedia.org/wiki/Acyclic_dependencies_principle">principle</a> that says that such a graph should not have any cycles, (or: <b>circular dependencies</b>). That is, if module A depends on B and B on C, then C should not depend on A.
    </p>

    <h2>When should you use it?</h2>
    <p>
        There are some practical reasons when circular dependencies are not possible:
    </p>
    <ul>
        <li>If the modules need to initialize resources before they can be used, circular dependencies lead to a chicken-and-egg problem. If the database module needs the logger module to write the start of the database, but the logging module needs the database to find out where to write the log.
        <li>If the code is written in a language that denies circular dependencies
    </ul>
    <p>
        And there are some objections to circular dependencies:
    </p>
    <ul>
        <li>Testing and maintenance: a change in module A means that all modules that depend on A may have been broken by the change and should be tested again. The further the dependency points upward, the more important the objection holds.
    </ul>
    <figure><img src="images/circular-dependency.png"><figcaption>Circular dependency having a big impact (MyDialog > MyApplication). From <a href="https://web.archive.org/web/20151130032005/http://www.objectmentor.com/resources/articles/granularity.pdf">Granularity</a></figcaption></figure>
    <h2>Examples</h2>
    <ul>
        <li>The language Go enforces explicit dependencies and disallows circular dependencies
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>A circular dependency may be hard to resolve
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Cache_(computing)">Wikipedia<a>
        <li><a href="https://web.archive.org/web/20151130032005/http://www.objectmentor.com/resources/articles/granularity.pdf">Robert C Martin's Granularity (The Acyclic Dependencies Principle)</a>
    </ul>
</section>

<?php
include 'template/footer.php';
