<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Broker</h1>
        <p>Service Oriented Architecture</p>
    </header>
    <p>You just want the job to be done. You don't care who performs it, but you may have some demands. Tell your broker. He will take care of it.</p>

    <h2>How does it work?</h2>
    <p>At all times servers can register and deregister themselves with the broker. If a server fails, it will be automatically (after a timeout) unregistered by the broker.</p>
    <p>The client requests a specific service. It formats its request in a specific format and sends it to its broker. The broker then selects the most suitable server to process the request. When the link between the client and the server is set up, they may start communicating directly, freeing the broker.</p>

    <figure><img src="images/broker.jpg"><figcaption>Broker architecture diagram</figcaption></figure>

    <p>There may also be multiple brokers in an architecture. These will then need their own communication protocols.</p>

    <h2>Examples</h2>
    <ul>
        <li>CORBA (Common Object Request Broker Architecture)
        <li>Web Services
        <li>Jini
    </ul>

    <h2>Where does it come from?</h2>
    <p>You go to a broker to buy a house. You don't want to need to know all about the housing business, costs, quality, suppliers. You just tell the broker your maximum price and some other requirements, and he starts looking.
    </p>

    <h2>When should you use it?</h2>
    <p>
    <ul>
        <li>If the relation client-server is not fixed because there are many suitable servers or the availability of the servers changes over time.
        <li>The choice of server depends on some criterion that is complex enough to be delegated to a separate component.
        <li>If you want to be independent of the physical location of the server (location transparacy).
    </ul>
    </p>

    <h2>Problems</h2>
    <p>Once you set up the broker, it is easy to program the service calls. Take care to handle transactions and exceptions well, though.</p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://www.guru99.com/soa-principles.html">SOA (Service Oriented Architecture) Principles</a>
        <li><a href="http://www.vico.org/pages/PatronsDisseny/Pattern%20Broker/">Pattern: Broker</a>
        <li><a href="http://www.openloop.com/softwareEngineering/patterns/architecturePattern/arch_Broker.htm">Architectural Patterns: Broker</a>
        <li><a href="http://www.cs.indiana.edu/~kksiazek/tuto.html">A brief tutorial on CORBA</a>
    </ul>
</section>

<?php
include 'template/footer.php';
