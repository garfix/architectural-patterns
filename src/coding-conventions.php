<?php
include 'template/data.php';
$pattern = $indexed['Coding Conventions'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An agreement between the developers of a project to use the same style of writing code.</dd>
    </dl>

    <figure><img alt="" src="images/coding-conventions.drawio.png"><figcaption>Coding Conventions</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Coding conventions for all major languages are available. It's best to stick to these, as it helps new developers on the project, with previous experience in the language to fit right in.
    </p>
    <p>
        Tools exist that can format code according to convention automatically. They're called <b>linters</b>
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Naming conventions (using camelCase, snake_case, or PascalCase)
        <li>Indentation style (tabs, spaces)
        <li>Programming style conventions
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Whenever multiple devolopers work on a project
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Coding_conventions">Wikipedia on coding conventions<a>
    </ul>
</section>

<?php
include 'template/footer.php';
