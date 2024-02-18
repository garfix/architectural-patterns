<?php
include 'template/data.php';
$pattern = $indexed['Entity'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>
            An entity is an object that has an identity, which is independent of the changes of its attributes. It represents long-lived information relevant for the users and is usually stored in a database.
        </dd>
    </dl>

    <figure><img src="images/entity.drawio.png"><figcaption>Entity</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        An entity is an object that has a role in the use cases of an application. Preferably it does not depend on any other part of the application, and its methods don't involve other entities.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Order, Loan, Payment, User, Relation
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Entity">Wikipedia on Entity<a>
    </ul>
</section>

<?php
include 'template/footer.php';
