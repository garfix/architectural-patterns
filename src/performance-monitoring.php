<?php
include 'template/data.php';
$pattern = $indexed['Performance Monitoring'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An external service that checks the performance of the application.</dd>
    </dl>

    <figure><img src="images/performance-monitoring.drawio.png"><figcaption>Performance Monitoring</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
       An external service polls the application to learn about its uptime, responsiveness and memory use. It can send a notification when the service is underperforming.
    </p>

    <ul>
        <li><b>system load</b>
        <li><b>memory use</b>
        <li><b>response time</b>
    </ul>

    <h2>When should you use it?</h2>
    <p>
        Use it when downtime is a risk to the stakeholders.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Application_performance_management">Wikipedia on application performance management<a>
    </ul>
    </section>

<?php
include 'template/footer.php';
