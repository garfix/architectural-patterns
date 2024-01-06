<?php
include 'template/data.php';
$pattern = $indexed['Ubiquitous Language'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The language used by experts and users is reflected in the names of classes and methods.</dd>
    </dl>

    <figure><img src="images/ubiquitous-language.drawio.png"><figcaption>Ubiquitous Language</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        It's always good to define the concepts used in a software project, and put these definitions in writing for all participants to see. Especially important for newcomers to the project.
    </p>
    <p>
        In ubiquitous language, classes are named after domain concepts. This facilitates the communication between developers and the client, as all participants are talking the same (ubiquitous) language.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>Always, except when using concepts that don't neatly fit into the domain
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Often clients use multiple names for the same concept, or the naming may change
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/bliki/UbiquitousLanguage.html">Martin Fowler on ubiquitous language<a>
    </ul>
</section>

<?php
include 'template/footer.php';
