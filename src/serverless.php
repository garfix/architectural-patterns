<?php
include 'template/data.php';
$pattern = $indexed['Serverless'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The number of active servers depends on the load, and the number may actually be zero.</dd>
    </dl>

    <figure><img src="images/load-balancing.drawio.png"><figcaption>Load balancing architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A cloud provider allows you to deploy a variable amount of servers of the same type. This allows you to scale your application horizontally, while paying only for the servers that are in actual use. In periods of inactivity, no servers are active, hence the word "serverless".
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>Use it when your load varies considerably, with periods of high activity and long inbetween periods of inactivity.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>The cloud provides charges for providing the service of serverless computing, regardless of the number of active instances.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Serverless_computing">Wikipedia<a>
    </ul>
</section>

<?php
include 'template/footer.php';
