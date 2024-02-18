<?php
include 'template/data.php';
$pattern = $indexed['Controller Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Controller logic handles the interaction with the application's environment</dd>
    </dl>

    <figure><img src="images/controller-logic.drawio.png"><figcaption>Controller Logic</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The environment of the application consists of the user and integration software from other systems.
    </p>
    <p>
        Controller logic handles the request, invokes domain logic and presentation logic.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Request processing
        <li>Response generation
        <li>Navigation / Routing
        <li>User input handling
        <li>Session management
        <li>Middleware integration
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller#Controller">Wikipedia on controller (in the context of MVC)<a>
    </ul>
</section>

<?php
include 'template/footer.php';
