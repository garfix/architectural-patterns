<?php
include 'template/data.php';
$pattern = $indexed['Data Access Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Prepares data going in and coming out of the database</dd>
    </dl>

    <figure><img src="images/data-access-logic.drawio.png"><figcaption>Data Access Logic</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Maps object data to relational data.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>ORM - Object Relational Mapping
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href=""><a>
    </ul>
</section>

<?php
include 'template/footer.php';
