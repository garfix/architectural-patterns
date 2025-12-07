<?php
include 'template/data.php';
$pattern = $indexed['Tests'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Code that tests the other types of code</dd>
    </dl>

    <figure><img alt="" src="images/tests.drawio.png"><figcaption>Tests</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Functional tests
        <li>Frontend tests
        <li>Security tests
        <li>Performance tests
        <li>Compatility tests
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Software_testing">Wikipedia on testing<a>
    </ul>
</section>

<?php
include 'template/footer.php';
