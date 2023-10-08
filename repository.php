<?php
$title = "Repository";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Repository</h1>
        <p>Database</p>
    </header>

    <dl>
        <dt>Definition</dt>
        <dd>The repository pattern contains a central data <em>repository</em>, and a number of <em>clients</em> that modify this repository.</dd>
    </dl>

    <p>
        Note: there's also a software design pattern by the same name, but with different meaning <a href="https://martinfowler.com/eaaCatalog/repository.html">for example</a>
    </p>

    <p>
    The repository pattern is commonly implemented as a <em>database management system</em> (DBMS). The DBMS can provide a domain specific language, <a href="https://en.wikipedia.org/wiki/ACID">ACID</a>, transactions, backup and restore, access  management, and much more.
    </p>

    <figure><img src="images/database.drawio.png"><figcaption>Repository architecture diagram</figcaption></figure>

    <h2>When should you use it?</h2>
    <p>Use it when the data of your application is a goal in itself, or when its too costly to transfer the data all the time.</p>

    <h2>Problems</h2>
    <ul>
        <li>Since all clients of the repository may be active at the same time, the repository needs to implement locking mechanisms to ensure the integrity is kept intact.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Database">Wikipedia on database</a>
    </ul>

</section>

<?php
include 'template/footer.php';
