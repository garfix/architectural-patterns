<?php
include 'template/data.php';
$pattern = $indexed['Data Replication'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Having a pool of identical data base servers, each holding a copy of the data, and synchronizing the data between replicas.</dd>
    </dl>

    <figure><img alt="" src="images/replication.drawio.png"><figcaption>Data Replication architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
       When a client requests data, one of the replicas is selected to serve the request. This horizontal scaling allows the system to handle more concurrent reads. When a write is done to a replica, the replica must make sure that the update is synchronized with the other replicas.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Data base replication
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When there are much more reads than writes and when the reads are big.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Synchronizing the updates is resource intensive
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Replication_(computing)">Wikipedia: load balancing<a>
    </ul>
</section>

<?php
include 'template/footer.php';
