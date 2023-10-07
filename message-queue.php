<?php
$title = "Message queue";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Message queue</h1>
        <p>Event bus, Event loop, Promise</p>
    </header>
    <dl>
        <dt>Definition</dt>
        <dd>This pattern is used to send a message from one component to one or more other components, asynchronously.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>The sending component places a message on the message queue. The distributor reads the oldest message from the queue an passes it to the recipient component.</p>

    <figure><img src="images/message-queue.drawio.png"><figcaption>Message queue architecture diagram</figcaption></figure>

    <h2>Variants</h2>
    <p>
        The pattern can be used within a program, but also between programs, using a specialized queue application.
    <p>

    <h2>Examples</h2>
    <ul>
        <li>Email: send email to one or more recipients, or a group
        <li>The JavaScript event loop handles messages in a single thread
        <li>Message queue software
    </ul>

    <h2>When should you use it?</h2>
    <p>
        Use it when it takes too long to wait for a response.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>There is an element of uncertainty introduced when messages are handled asynchronously. You can't be sure if and when they are handled.
        <li>If the modules share large amounts of data, it may not be a good idea to pump these over the bus all the time. If you choose to share the data between the modules, make sure no synchronization issues occur.
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Modules may run in the same process or in different processes (as is the case with Microservices)
        <li>The event bus may be part of the same process or it may be another process. It may use the internet as its substrate.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.m.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern">Wikipedia on publish/subscribe</a>
        <li><a href="https://medium.com/elixirlabs/event-bus-implementation-s-d2854a9fafd5">Event Bus Implementation(s)</a>
    </ul>
</section>

<?php
include 'template/footer.php';
