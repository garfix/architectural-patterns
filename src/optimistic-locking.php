<?php
include 'template/data.php';
$pattern = $indexed['Optimistic Locking'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Allow concurrent processes to prepare a change to the same data, but check for consistency before the commit.</dd>
    </dl>

    <figure><img src="images/optimistic-locking.drawio.png"><figcaption>Optimistic Locking</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Martin Fowler: "Often a business transaction executes across a series of system transactions. Once outside the confines of a single system transaction, we can't depend on our database manager alone to ensure that the business transaction will leave the record data in a consistent state. Data integrity is at risk once two sessions begin to work on the same records and lost updates are quite possible. Also, with one session editing data that another is reading an inconsistent read becomes likely. Optimistic Offline Lock solves this problem by validating that the changes about to be committed by one session don't conflict with the changes of another session. A successful pre-commit validation is, in a sense, obtaining a lock indi-cating it's okay to go ahead with the changes to the record data. So long as the validation and the updates occur within a single system transaction the business transaction will display consistency."
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Git pre-commit hook
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When the chance of change conflicts is low or the price of conflicts is low.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>It a conflict occurs and the changes both processes made can't be reconciled, one change needs to fail.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/eaaCatalog/optimisticOfflineLock.html">Martin Fowler on Optimistic offline lock<a>
    </ul>
</section>

<?php
include 'template/footer.php';
