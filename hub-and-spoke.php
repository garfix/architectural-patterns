<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Hub and Spoke</h1>
    </header>
    <p>This architecture connects systems that are otherwise incompatible. It connects "anything to everything", by relaying messages from clients to servers, and "interpreting" messages from the language of X to the language of Y.</p>

    <h2>How does it work?</h2>
    <p>The "spoke" systems may register and unregister with the hub at any time.</p>
    <p>When spoke X sends a message to spoke Y via the hub, the hub parses the message in X's language, converts it to some intermediate representation (if necessary), and then converts it to Y's language. The message is then sent on to system Y.</p>
    <p>The intermediate representation is useful to restrict the number of conversions necessary.</p>

    <figure><img src="images/hub_and_spoke.jpg"><figcaption>Hub and Spoke architecture diagram</figcaption></figure>

    <h2>When should you use it?</h2>
    <p>Use it to connect incompatible legacy systems.</p>

    <h2>Problems</h2>
    <p>
        <ul>
            <li>Single point of failure (hub)
            <li>More complex (debugging)
        </ul>
    </p>

    <h2>Links</h2>
    <ul>
        None yet
    </ul>
</section>

<?php
include 'template/footer.php';
