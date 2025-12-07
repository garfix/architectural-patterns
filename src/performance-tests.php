<?php
include 'template/data.php';
$pattern = $indexed['Performance tests'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Tests that measure the performance of the system's main functions</dd>
    </dl>

    <figure><img alt="" src="images/performance-tests.drawio.png"><figcaption>Performance tests</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The system's stakeholders determine the acceptable limits for the performance of the system. Specialized software helps to track performance of a system.
    </p>
    <p>
        Main factors of performance:
    </p>
    <ul>
        <li><b>memory</b> the amount of memory used
        <li><b>speed</b> the speed needed to perform the function
        <li><b>scalability</b> the amount of simultaneous users that can use the function
    </ul>

    <h2>When should you use it?</h2>
    <p>
        Applications get slower when more features are added. At some point they become too slow for the taste of the user. To prevent this you can set performance limits before you start to design the application. They tell you to redesign when the limits are crossed. They also help you to think about performance on every step of the way. The same goes for memory and scalability.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>It's hard to really test speed, as the computer that runs the test is doing other things at the same time, interfering with the results. Hence it's better to run the test multiple times and take the median, or even the minimum of the results.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://www.browserstack.com/guide/performance-testing">Browserstack on performance testing<a>
    </ul>
    </section>

<?php
include 'template/footer.php';
