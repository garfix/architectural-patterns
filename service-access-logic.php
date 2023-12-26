<?php
include 'template/data.php';
$pattern = $indexed['Service Access Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Code that talks to external services, or more general, any volatile dependencies.</dd>
    </dl>

    <figure><img src="images/service-access-logic.drawio.png"><figcaption>Service Access Logic</figcaption></figure>

    <p>Service access logic is part of the Controller in MVC, and Boundary in ECB</p>

    <h2>How does it work?</h2>
    <p>
        This code writes to files, reads input, sends emails, reads the current time, and asks for a random number. Accessing databases could also be part of it, but is usually considered as separate.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Send email
        <li>Read/write file
        <li>Get random number
        <li>Ask for current time
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href=""><a>
    </ul>
</section>

<?php
include 'template/footer.php';
