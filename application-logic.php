<?php
include 'template/data.php';
$pattern = $indexed['Application Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Application logic implements the use cases and workflows of the application. It doesn't have any volatile dependencies.</dd>
    </dl>

    <figure><img src="images/application-logic.drawio.png"><figcaption>Application Logic</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        <b>Volatile dependencies</b> are services that don't behave the same in all circumstances. Examples: database, file system, sending email, random number generator, current time. A file may not exist, disk may be full, email may not be sent, etc. The opposite of volatile is <b>stable</b>. A stable depenency is dependable: it behaves the same in all circumstances.
    </p>
    <p>
        This code expresses the uses cases / workflows of the application in its purest form. This is <i>what</i> the application is doing, distinguished from <i>how</i> it does it.
    </p>
    <p>
        Domain logic is separated from the rest of the application (the <b>boundary</b> in ECB terms) to make it testable, understandable, and to discourage code duplication.
    </p>
    <p>
        Code that doesn't interact with any volatile dependency doesn't have any effects (except for taking up time). And domain logic can interact with many of these dependencies. But from the point of view of the domain logic, it just talks to a stable <i>interface</i>, and it doesn't know that this interface is <i>implemented</i> by a volatile service.
    </p>
    <p>Application logic only depends on domain logic. All other dependencies are abstracted away by interfaces.</p>

    <h2>Examples</h2>
    <ul>
        <li>Use cases
        <li>Workflow
        <li>Error handling
        <li>Security and authorization
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Business_logic">Wikipedia on business logic<a>
    </ul>
</section>

<?php
include 'template/footer.php';
