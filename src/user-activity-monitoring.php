<?php
include 'template/data.php';
$pattern = $indexed['User-activity Monitoring'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Code that logs activity of users in the system</dd>
    </dl>

    <figure><img src="images/user-activity-monitoring.drawio.png"><figcaption>User-activity monitoring</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Specific user events are logged in order to be analyzed.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When there's a commercial interest in the statistical patterns of the use of the application.
        <li>To find out what problem occurs to a specific user
    </ul>

    <h2>Examples</h2>
    <ul>
        <li>Google Analytics
        <li>Hotjar
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>User privacy is a real concern
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/User_activity_monitoring">Wikipedia on user activity monitoring<a>
    </ul>
    </section>

<?php
include 'template/footer.php';
