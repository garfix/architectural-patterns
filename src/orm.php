<?php
include 'template/data.php';
$pattern = $indexed['ORM'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Defines how an in-memory object is stored in a database row and retrieved from that row</dd>
    </dl>

    <figure><img alt="" src="images/orm.drawio.png"><figcaption>Object-Relational Mapping</figcaption></figure>

    <h2>When should you use it?</h2>
    <p>When business logic data is represented in objects which need to be stored in the database</p>

    <h2>Problems</h2>
    <ul>
        <li>Object/Relational mapping is hard; it may take quite an effort to get it right
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/eaaCatalog/">Catalog of Patterns of Enterprise Application Architecture</a> contains many ORM patterns
    </ul>

</section>

<?php
include 'template/footer.php';
