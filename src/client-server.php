<?php
include 'template/data.php';
$pattern = $indexed['Client-Server'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The client application connects to the services it uses via a network.</dd>
    </dl>
    <p>
        The <b>client</b> contains the presentation, the controller, and a volatile version of part of the model. The <b>server</b> contains the persisted full model.
    </p>
    <p>
        There is one server and there are multiple clients.
    </p>

    <figure><img src="images/client-server.drawio.png"><figcaption>Client-Server architecture diagram</figcaption></figure>

    <p>
        A Client-Server system is one in which the server performs some kind of service that is used by many clients. The clients take the lead
        in the communication.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Web-applications
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        At the advance of multitasking operating systems in the nineteen-sixties, it became possible to access a single computer (the server)
        from different terminals (clients). The distance between the clients and the server became bigger and the number
        of clients increased. At the time the application and database tiers were still integrated. It is called
        <i>client-server</i> computing.
    </p>

    <h2>When should you use it?</h2>
    <p>
        When your service has a central data store and multiple users.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Client%E2%80%93server_model">Wikipedia on Client-Server</a>
    </ul>
</section>

<?php
include 'template/footer.php';
