<?php
include 'template/data.php';
$pattern = $indexed['Software Versioning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Software versioning is the process of assigning either unique version names or numbers to unique states of software.</dd>
    </dl>

    <figure><img src="images/software-versioning.drawio.png"><figcaption>Software Versioning</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Software changes continuously. This means new features, but also changes in interfaces. And it may mean new bugs. Therefore other parties that work with this software need to be able to use a version of the software that is known to work and have a specific interface.
    </p>
    <p>
        Versioning may be as simple as assigning a follow-up number (1, 2, 3, ...) to a fixed version of the code, but the version number may also contain information about the type of change that has been made (interface-breaking, feature-adding, or bug-fixing).
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Semantic versioning (semver): major.minor.patch
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When others depend on your software for their own software.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>A major change to the software will break software of third-parties, forcing them to update their code.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Software_versioning">Wikipedia on software versioning<a>
    </ul>
</section>

<?php
include 'template/footer.php';
