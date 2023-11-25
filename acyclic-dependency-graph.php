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
        <li>If the modules need to initialize resources before they can be used, circular dependencies lead to a chicken-and-egg problem. If the database module needs the logger module to write the startup time of the database, but the logging module needs the database to find out where to write the log.
        <li>If the code is written in a language that denies circular dependencies
    </ul>
    <p>
        And there are some objections to circular dependencies:
    </p>
    <ul>
        <li>Testing and maintenance: a change in module A means that all modules that depend on A may have been broken by the change and should be tested again. The further the dependency points upward, the more important the objection holds.
        <li>Circular class references create high coupling; both classes must be recompiled every time either of them is changed
        <li>Circular assembly references prevent static linking, because B depends on A but A cannot be assembled until B is complete
        <li>Circular object references can crash naïve recursive algorithms (such as serializers, visitors and pretty-printers) with stack overflows. The more advanced algorithms will have cycle detection and will merely fail with a more descriptive exception/error message.
        <li>Circular object references also make dependency injection impossible, significantly reducing the testability of your system.
        <li>Objects with a very large number of circular references are often God Objects. Even if they are not, they have a tendency to lead to Spaghetti Code
        <li>Circular entity references (especially in databases, but also in domain models) prevent the use of non-nullability constraints, which may eventually lead to data corruption or at least inconsistency.
        <li>Circular references in general are simply confusing and drastically increase the cognitive load when attempting to understand how a program functions.
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
        <li><a href="https://softwareengineering.stackexchange.com/a/12030">A StackExchange answer by Aaronaught</a>
    </ul>
</section>

<?php
include 'template/footer.php';
