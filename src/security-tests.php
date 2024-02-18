<?php
include 'template/data.php';
$pattern = $indexed['Security tests'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Tests to check if the system doesn't allow unauthorized access</dd>
    </dl>

    <figure><img src="images/security-tests.drawio.png"><figcaption>security tests</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Dedicated software helps you to check a number of known vulnerabilities on the application.
    </p>
    <p>
        Types of test:
    </p>
    <ul>
        <li><b>penetration tests</b> specialized software tries to find ways to hack your system
        <li><b>access control tests</b> tests that aim specifically at your application's access control mechanism
    </ul>

    <h2>When should you use it?</h2>
    <p>
        They are necessary when your application is open to the outside world.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Security_testing">Wikipedia on security testing<a>
    </ul>
</section>

<?php
include 'template/footer.php';
