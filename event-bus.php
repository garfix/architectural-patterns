<?php
$title = "Event-bus";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Event-bus</h1>
        <p>Microservices</p>
    </header>
    <p>If your application requires a number of modules that need to communicate with each other in various ways, this architecture is a sure bet. It is endlessly flexible: you can add and remove modules at run-time, communicate directly or broadcast messages. It is completely free. </p>

    <h2>How does it work?</h2>
    <p>Modules may be added and removed at any time.</p>
    <p>When a module wishes to communicate with another module or other modules, it places a message on the Event Bus. The Event Bus takes care of delivering the message to the recipients.</p>

    <figure><img src="images/eventbus.jpg"><figcaption>Event-bus architecture diagram</figcaption></figure>

    <p>There are several types of communication that may occur on the Event Bus:
    <ul>
        <li>Publish-Subscribe: Modules may subscribe to certain message types. Whenever a module publishes a message to the bus, it will be delivered to all modules that subscribed to its message type.
        <li>Broadcast: The message will be delivered to all (other) modules.
        <li>Point-to-point: The message has one and only one recipient.
    </ul>
    </p>
    <p>The sending module normally doesn't care when the other modules receive and process the message. If the time of processing is important, the message may be sent <i>immediately</i>. It corresponds to calling the function in receiving modules directly, with the difference that the modules are still decoupled.</p>

    <h2>Examples</h2>
    From <a href="http://www.cs.uu.nl/docs/vakken/swa/20012002/Slides/SA-5-styles.pdf">Gert Florijn's slides on architectural styles and patterns</a>:
    <ul>
        <li>Process monitoring
        <li>Trading Systems
        <li>Software development environments
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
        <li><a href="http://martinfowler.com/articles/microservices.html">Martin Fowler on Microservices</a>
    </ul>
</section>

<?php
include 'template/footer.php';
