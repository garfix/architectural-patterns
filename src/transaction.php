<?php
include 'template/data.php';
$pattern = $indexed['Transaction'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A transaction treats a series of database changes as a unit.</dd>
    </dl>
    <p>
        A transaction is a series of database changes that can either be committed (executed) or rolled back (ignored). The term <b>unit of work</b> is applied to the same principle at the business logic level.
    </p>

    <figure><img alt="" src="images/transaction.drawio.png"><figcaption>Transaction</figcaption></figure>

    <p>
        A simple example of a transaction concerns the movement of money from customer A to customer B. The amount of A is decreased, while the amount of B is increased. If this series of events would somehow stop halfway, an inconsistent state would be formed, which would take manual intervention to fix. By grouping the series and committing it as a whole, this inconsistency cannot occur.
    </p>
    <p>
        It's good to think about transactions at the start of a project and agree on the place in code where the transaction starts and ends. When every CRUD (Create, Read, Update, Delete) action contains a commit, it is impossible to create transactions from series of these actions.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Database transaction
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When it matters that an inconsistent state occurs
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>A transaction may lock tables. A transaction that takes a long time may lead to other threads having to wait
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Database_transaction">Wikipedia on database transaction</a>
        <li><a href="https://martinfowler.com/eaaCatalog/unitOfWork.html">Martin Fowler on unit of work</a>
    </ol>
</section>

<?php
include 'template/footer.php';
