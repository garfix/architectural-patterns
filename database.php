<?php
$title = "Repository";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Database</h1>
    </header>

    <p>
        The database pattern contains a single datastructure, the <em>database</em>, and a number of <em>clients</em> that modify this datastructure.
    </p>
    <p>
        A database can provide a domain specific language, <a href="https://en.wikipedia.org/wiki/ACID">ACID</a>, transactions, backup and restore, access  management, and much more.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Databases: relational, graph based, object oriented, triple store
        <li>Compiler. Modern compilers use the same datastructure in successive stages of the compilation process.
    </ul>

    <h2>When should you use it?</h2>
    <p>Use it when the data of your application is a goal in itself, or when its too costly to transfer the data all the time.</p>

    <h2>How does it work?</h2>
    <p>All knowledge sources can read/write to the database. The way all these interactions are synchronized is up to the database.</p>

    <figure><img src="images/database.png"><figcaption>Database architecture diagram</figcaption></figure>

    <h2>Problems</h2>
    <ul>
        <li>Since all clients of the database may be active at the same time, the database needs to implement locking mechanisms to ensure the integrity is kept intact.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Database">Wikipedia on database</a>
    </ul>

</section>

<?php
include 'template/footer.php';
