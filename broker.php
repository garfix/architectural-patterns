<?php
$title = "Broker";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Broker</h1>
        <p>Service Oriented Architecture, Microservices, API</p>
    </header>
    <p>
        The broker pattern connects a client with a service through an intermediary using a uniform communication protocol. The goal is make the services independent (decoupling) and give clients a public API.
    </p>

    <p>
        The metaphore is as follows: You go to a broker to buy a house. You don't want to need to know all about the housing business. You just tell the broker your maximum price and some other requirements, and he starts looking.
    </p>

    <h2>How does it work?</h2>
    <p>
        Services are registered with the broker. The client requests a specific service. It formats its request in a specific format and sends it to the broker. The broker then selects the most suitable service to process the request.
    </p>

    <figure><img src="images/broker.drawio.png"><figcaption>Broker architecture diagram</figcaption></figure>

    <p>
        An architecture with standalone services is called a service oriented architecture (SOA). The broker in a SOA commonly takes the form of an Enterprise Service Bus (ESB). In a microservices architecture the broker is more lightweight and the services more fine-grained.
    </p>
    <p>
        There may also be multiple brokers in an architecture. These will then need their own communication protocols.
    </p>

    <p>The broker may handle all messages directly, or place them in a queue, to be processed as soon as possible, or at a specified time. This is a <em>message broker</em></p>

    <h2>Examples</h2>
    <ul>
        <li>REST based API's
        <li>Message queues
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>In a large organization many teams work on different services. They don't want to be dependent on other teams.
        <li>When you want to provide your services publicly
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>(Web) API
        <li>Enterprise Service Bus (ESB)
        <li>Message queue
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Setting up the broker, and agree on a communication protocol can be quite a bit of work, even when using standard software.
        <li>The overhead of passing the call to a service via a broker has a performance penalty
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Service-oriented_architecture">Wikipedia on Service Oriented Architecture</a>
        <li><a href="http://www.openloop.com/softwareEngineering/patterns/architecturePattern/arch_Broker.htm">Architectural Patterns: Broker</a>
    </ul>
</section>

<?php
include 'template/footer.php';
