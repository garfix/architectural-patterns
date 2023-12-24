<?php
include 'template/data.php';
$pattern = $indexed['Domain Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Domain logic implements the entities and critical business rules of the application. It doesn't have any volatile dependencies.</dd>
    </dl>

    <figure><img src="images/domain-logic.drawio.png"><figcaption>Domain Logic</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        This code expresses the <a href="entity">entities</a> and business rules of the organization. A business rule would be part of the organization whether it is implemented in the application or not. It would be the same in any application. Example: "Charge N% for a loan"
    </p>
    <p>
        The business rules can be part of the entity classes.
    </p>
    <p>
        Domain Logic has no dependencies on other types of code, not even application logic.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Entities / business objects
        <li>Implementation of business rules
        <li>Data validation
        <li>Algorithms and calculations
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Business_logic">Wikipedia on business logic<a>
    </ul>
</section>

<?php
include 'template/footer.php';
