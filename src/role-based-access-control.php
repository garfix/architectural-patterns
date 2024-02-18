<?php
include 'template/data.php';
$pattern = $indexed['Role-based Access Control'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Permission to perform an operation on an object is given to a role that is assigned to a subject.</dd>
    </dl>
    <p>
        The user of a website (subject) can only perform a selection of the actions (operations) possible in the website. Rather than giving the subject direct permission to an operation, which would involve a lot of work and careful thought, roles are defined that give access to a range of permissions. The user is then simply assigned a role (or a few roles).
    </p>
    <p>
        Assigning roles to users, and assigning permissions to roles, are permissions on their own.
    </p>

    <figure><img src="images/role-based-access-control.drawio.png"><figcaption>Role-based Access Control architecture diagram</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Role: content editor, permissions: read, edit, delete, and publish articles
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>If the application needs some form of non-trivial access restriction.
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Role-based_access_control">Wikipedia</a>
    </ol>
</section>

<?php
include 'template/footer.php';
