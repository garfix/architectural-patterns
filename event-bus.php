<?php
$title = "Event-bus";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Event driven</h1>
        <p>Publish-Subscribe, Event loop</p>
    </header>
    <p>If your application requires a number of components that need to communicate with each other without a central component. It is endlessly flexible: you can add and remove modules at run-time, communicate directly or broadcast messages. </p>

    <h2>How does it work?</h2>
    <p>Components may be added and removed at any time. When a components wishes to communicate with another component or other components, it places a message on the Event Bus. The Event Bus takes care of delivering the message to the recipients.</p>

    <figure><img src="images/event-bus-1.png"><figcaption>Event-bus architecture diagram</figcaption></figure>

    <p>There are several types of communication that may occur on the Event Bus:</p>
    <ul>
        <li>Publish-Subscribe: Modules may subscribe to certain message types. Whenever a module publishes a message to the bus, it will be delivered to all modules that subscribed to its message type.
        <li>Broadcast: The message will be delivered to all (other) modules.
        <li>Point-to-point: The message has one and only one recipient.
    </ul>
    <p>
        Components may publish messages at will, or there may be a central component that stores incoming messages and processes them sequentially. The latter is called an <em>event loop</em>.
    <p>
    <p>The sending module normally doesn't care when the other modules receive and process the message. If the time of processing is important, the message may be sent <i>immediately</i>. It corresponds to calling the function in receiving modules directly, with the difference that the modules are still decoupled.</p>

    <h2>Examples</h2>
    <ul>
        <li>Ethernet
    </ul>

    <h2>When should you use it?</h2>
    <p>
    Use it when your application can be factored in functionally separable modules that are capable of communicating through simple messages.</p>

    <h2>Problems</h2>
    <p>
    <ul>
        <li>If the modules share large amounts of data, it may not be a good idea to pump these over the bus all the time. If you choose to share the data between the modules, make sure no synchronization issues occur.
    </ul>
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Relates to the Observer Design Pattern, with added functionality.
        <li>Modules may run in the same process or in different processes (as is the case with Microservices)
        <li>The event bus may be part of the same process or it may be another process. It may use the internet as its substrate.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://medium.com/elixirlabs/event-bus-implementation-s-d2854a9fafd5">Event Bus Implementation(s)</a>
    </ul>
</section>

<?php
include 'template/footer.php';
