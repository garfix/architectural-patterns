<?php
include 'template/data.php';
$pattern = $indexed['Application Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Application logic implements the use cases of the application. It doesn't have any volatile dependencies.</dd>
    </dl>

    <figure><img src="images/application-logic.drawio.png"><figcaption>Application Logic</figcaption></figure>

    <p>Application logic is part of the Controller in MVC, and Control in ECB</p>

    <h2>How does it work?</h2>
    <p>
        Application logic implements a <a href="https://en.wikipedia.org/wiki/Use_case">use case</a>: a series of steps that a user goes through to fulfill an objective. If a use case is regarded as a state machine, then application logic makes the application transition from one state to the next, repeatedly. In this process data is accumulated and transformed It is also passed to/from the ui, the database and to other services, but the actual execution of these parts of the application is outside of the realm of application logic.
    </p>
    <p>
        Domain logic is separated from the rest of the application (the <b>boundary</b> in ECB terms) to make it testable, understandable, and to discourage code duplication.
    </p>
    <p>Application logic only depends on domain logic. All other dependencies are abstracted away by interfaces.</p>
    <p>
        <b>Volatile dependencies</b> are services that don't behave the same in all circumstances. Examples: database, file system, sending email, random number generator, current time. A file may not exist, disk may be full, email may not be sent, etc. The opposite of volatile is <b>stable</b>. A stable depenency is dependable: it behaves the same in all circumstances.
    </p>
    <p>
        Code that doesn't interact with any volatile dependency doesn't have any effects (except for taking up time). And domain logic can interact with many of these dependencies. But from the point of view of the domain logic, it just talks to a stable <i>interface</i>, and it doesn't know that this interface is <i>implemented</i> by a volatile service.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>User Authentication Logic
        <li>Input Validation Logic
        <li>Request Handling Logic
        <li>Response Generation Logic
        <li>Business Rule Execution Logic
        <li>Session Management Logic
        <li>Error Handling Logic
        <li>Caching Logic
        <li>Middleware Execution Logic
        <li>Data Transformation Logic
        <li>Concurrency Control Logic
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Business_logic">Wikipedia on business logic<a>
    </ul>
</section>

<?php
include 'template/footer.php';
