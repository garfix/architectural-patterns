<?php
include 'template/data.php';
$pattern = $indexed['N-Tier'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A tiered architecture has separate servers for each of its main functions. Each tier only communicates with the tier before and the tier after it.</dd>
    </dl>
    <p>
        All web applications are N-Tier architectures. There is an application server, a large number of web-clients, and a database.
        An N-Tier architecture is really a Client-Server architecture combined with the Layered architecture.
    </p>

    <figure><img src="images/n-tier.drawio.png"><figcaption>N-tiers architecture diagram</figcaption></figure>

    <p>
        A Client-Server system is one in which the server performs some kind of service that is used by many clients. The clients take the lead
        in the communication. The basic Client-Server architecture has 2 tiers (Client and Server).
        I will basically explain the 3-tier architecture here, which is an extension to the 2-tier architecture.
    </p>
    <p>
        The first, or <b>presentation tier</b>, a.k.a. the client or front-end, deals with the interaction with the user.
        Usually, there can be any number of clients which can all access the server at the same time.
        Currently the clients are mostly thin clients, which means they do not contain a lot of application code
        (in contrast to fat clients).
        Clients process user input, send requests to the server, and show the results of these requests to the user.
        A common client is made up of a number of dynamic HTML pages that one can access with a web browser.
    </p>
    <p>
        The second, or <b>application tier</b>, a.k.a. the server, or the back-end, or middleware, processes the requests of all clients. It is
        the actual web application that performs all functionality specific to the web application. However,
        it does not store the persistent data itself. Whenever it needs data of any importance, it contacts the database server.
    </p>
    <p>
        The third, or <b>database tier</b> contains the database management system that manages all persistent data.
    </p>

    <p>
        It is clear that there are multiple clients. That's what client-server computing is all about.
        However, in the second and third tier there can also be multiple instances of the same application.
        If this is the case, it is because of scalability, load-balancing and redundancy. Which means
        the system is important, so let's add extra equipment that does the same thing. This makes the server
        a very powerful system, but also introduces synchronisation problems.
    </p>

    <h2>How does it work?</h2>
    <p>
        Communication between the different tiers often takes place via a network.
        Clients communicate to the application server directly or to a broker that balances requests between
        separate server machines. The database layer usually contains only one database.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Web-applications. Where the first tier is the application-tier, the second tier is the
        application tier and the third tier is the database tier.
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        At the advance of multitasking operating systems in the nineteen-sixties, it became possible to access a single computer (the server)
        from different terminals (clients). The distance between the clients and the server became bigger and the number
        of clients increased. At the time the application and database tiers were still integrated. It is called
        <i>client-server</i> computing.
    </p>

    <figure><img src="images/tiers_2.jpg"><figcaption>Multiple tiers</figcaption></figure>

    <h2>When should you use it?</h2>
    <p>
        You don't usually need to build your own application and database server. Most application developers
        either build the application specific front-end code, or the application specific back-end code.
        This code is then embedded in an existing application server and uses an existing database management server.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Multitier_architecture">Wikipedia on Multitier</a>
        <li><a href="http://sunsite.uakom.sk/sunworldonline/swol-08-1998/swol-08-java.html">Beyond n-tier: what you really get from Java</a>
    </ul>
</section>

<?php
include 'template/footer.php';
