<?php
include 'template/data.php';
$pattern = $indexed['Frontend tests'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Code that tests that the user interface of the application.</dd>
    </dl>

    <figure><img alt="" src="images/frontend-tests.drawio.png"><figcaption>Functional tests</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        For every major interaction with the frontend, you create a script of the interaction: every click, text input and delay. Frontend test suites then run this script to check if it still works.
    </p>

    <h2>When should you use it?</h2>
    <p>
        When the risk that an error in the frontend occurs is unacceptable.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>Frontend tests are much slower than functional tests
        <li>A change to the user interface may corrupt multiple tests
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://www.cypress.io/">Cypress</a> frontend web application testing platform
    </ul>
</section>

<?php
include 'template/footer.php';
