<?php
$title = "Repository";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Repository</h1>
    </header>
    <p>The repository contains a single datastructure, the Repository, and a number of modules called Knowledge Sources, that modify this datastructure. These are the only characteristics of a repository architecture. If all these Knowledge Sources start modifying at the same time, all hell breaks loose. Therefore the order in which they have access needs to be regulated.</p>

    <h2>Examples</h2>
    <ul>
        <li>Database.
        <li>Compiler. Modern compilers use the same datastructure in successive stages of the compilation process.
    </ul>

    <h2>When should you use it?</h2>
    <p>Use it when the data of your application is a goal in itself, or when its too costly to transfer the data all the time.</p>

    <h2>How does it work?</h2>
    <p>All knowledge sources can read/write to the repository. The way all these interactions are synchronized is up to the repository and the way the repository is used.</p>

    <figure><img src="images/repository.jpg"><figcaption>Repository architecture diagram</figcaption></figure>

    <p>Compilers use a repository. The stages of the compiler are performed successively. This way the repository is used orderly.</p>
    <p>Databased are repositories. Since all clients of the database may be active at the same time, the database needs to implement locking mechanisms to ensure the integrity of the repository is kept intact.</p>

    <h2>Problems</h2>
    <p>
    <ul>
        <li>Synchronisation. Requires special attention if the Repository is approached in parallel by several Knowledge Sources.
    </ul>
    </p>
</section>

<?php
include 'template/footer.php';
