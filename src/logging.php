<?php
include 'template/data.php';
$pattern = $indexed['Logging'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Leave a trail of information, warnings, and errors as they occur in an external document that can be inspected later.</dd>
    </dl>

    <figure><img src="images/logging.drawio.png"><figcaption>Logging architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Whenever something interesting happens in the application, write a line describing it in the log.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you need to able to debug an error that occurred some time ago.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Too much logging fills up disk space and slows down debugging
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Logging_(computing)">Wikipedia<a>
    </ul>
</section>

<?php
include 'template/footer.php';
