<?php
$title = "Publish-Subscribe";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Publish-Subscribe</h1>
        <p>Event bus, Event loop</p>
    </header>
    <dl>
        <dt>Definition</dt>
        <dd>Any component (publisher) can notify all interested other components (subscribers) of the occurrence of an event, by sending a message to the event bus. Components that have registered themselves with the registry will receive the message and act upon it. The publisher is not informed when the message is handled.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Components may register themselves with the registry at any time. When a component notifies other components of an event, it places a message on the event bus. The event bus takes care of delivering the message to the registered recipients.</p>

    <figure><img src="images/event-bus-1.png"><figcaption>Event-bus architecture diagram</figcaption></figure>

    <h2>Variants</h2>
    <p>There are several types of communication that may occur on the Event Bus:</p>
    <ul>
        <li>Publish-Subscribe: Modules may subscribe to certain message types. Whenever a module publishes a message to the bus, it will be delivered to all modules that subscribed to its message type.
        <li>Broadcast: The message will be delivered to all (other) modules.
    </ul>
    <p>
        Messages may be handled synchronously (immediately), or placed in a queue to be handled at the first convenient time. In that case an <em>event loop</em> handles the pending messages one by one. The loop remains idle at times when there are no messages to handle.
    <p>

    <h2>Examples</h2>
    <ul>
        <li>Ethernet handles point-to-point messages and broadcasts
        <li>A graphical user interface (GUI) handles user events (keyboard, mouse) and system events (time) by passing messages to event handlers
    </ul>

    <h2>When should you use it?</h2>
    <p>
        Use it when your application can be factored in functionally separable modules that are capable of communicating through simple messages.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>There is an element of uncertainty introduced when messages are handled asynchronously. You can't be sure if and when they are handled.
        <li>If the modules share large amounts of data, it may not be a good idea to pump these over the bus all the time. If you choose to share the data between the modules, make sure no synchronization issues occur.
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Relates to the Observer Design Pattern, with added functionality.
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
