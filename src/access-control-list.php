<?php
include 'template/data.php';
$pattern = $indexed['Access Control List'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Permission to perform an operation on an object is given to a subject.</dd>
    </dl>
    <p>
        The user of a file system (subject) can only perform a selection of the actions (operations) possible on each of the files or directories (objects).
    </p>
    <p>
        "User" may also be user group, and this a collection of users.
    </p>

    <figure><img alt="" src="images/access-control-list.drawio.png"><figcaption>Access Control List architecture diagram</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>File systems: John may read and write file Personnel.doc
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>This is the simplest form of access control
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Access-control_list">Wikipedia</a>
    </ol>
</section>

<?php
include 'template/footer.php';
