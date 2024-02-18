<?php
include 'template/data.php';
$pattern = $indexed['Compatibility tests'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Code that tests if your application runs on all intended devices.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>
        Stakeholders establish the range of devices the application is to support. Test your application on all these devices, or a fair representation of them. On web applications this is called cross-browser testing. The application's functions are run on all supported devices.
    </p>

    <h2>When should you use it?</h2>
    <p>
        System tests simulate a single action of a user, and provide thus a realistic collaboration of all modules of a system.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>System tests are likely to be much slower than integration tests
        <li>If a system test fails it is hard to debug
    </ul>

</section>

<?php
include 'template/footer.php';
