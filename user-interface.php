<?php
include 'template/data.php';
$pattern = $indexed['User Interface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The User Interface is a specification of user interface elements without the data that goes in or out of them</dd>
    </dl>

    <figure><img src="images/user-interface.drawio.png"><figcaption>User Interface</figcaption></figure>

    <p>Application logic is part of the View in MVC, and Boundary in ECB</p>

    <h2>How does it work?</h2>
    <p>
        User interface elements can be created using procedural code or declared via a template.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>The Document Object Model of a browser
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/User_interface">Wikipedia on user interface<a>
    </ul>
</section>

<?php
include 'template/footer.php';
