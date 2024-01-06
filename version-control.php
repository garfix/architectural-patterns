<?php
include 'template/data.php';
$pattern = $indexed['Version Control'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Storing all revisions of a piece of software, along with the connections between each revision and its predecessor</dd>
    </dl>

    <figure><img src="images/version-control.drawio.png"><figcaption>Version Control</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Specialized software (version control systems) allows you to create a new revision easily. It will also guide you through previous versions, show differences, and revert to a previous version.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Git
        <li>SVN
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Always. Even for the tiniest project does it help to view the changes you made and to undo all of them at once.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Version_control">Wikipedia on version control<a>
    </ul>
</section>

<?php
include 'template/footer.php';

