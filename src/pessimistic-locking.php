<?php
include 'template/data.php';
$pattern = $indexed['Pessimistic Locking'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Don't allow concurrent processes to change the same data at the same time.</dd>
    </dl>

    <figure><img src="images/optimistic-locking.drawio.png"><figcaption>Optimistic Locking</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Martin Fowler: "Pessimistic Offline Lock prevents conflicts by avoiding them altogether. It forces a business transaction to acquire a lock on a piece of data before it starts to use it, so that, most of the time, once you begin a business transaction you can be pretty sure you'll complete it without being bounced by concurrency control."
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Database locks
        <li>Mutexes in code
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When change conflicts can't be reconciled and conflicts lead to data loss or data corruption.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>It a conflict occurs and the changes both processes made can't be reconciliated, one change needs to fail.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/eaaCatalog/pessimisticOfflineLock.html">Martin Fowler on Pessimistic offline lock<a>
    </ul>
</section>

<?php
include 'template/footer.php';
