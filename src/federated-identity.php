<?php
include 'template/data.php';
$pattern = $indexed['Fedrated Identity'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Provide a gateway to large identity providers for authentication</dd>
    </dl>

    <p>
        Allow the user to log in using their Google / Facebook / Microsoft etc account.
    </p>

    <figure><img alt="" src="images/federated-identity.drawio.png"><figcaption>Federated Identity architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The <b>federation gateway</b> allows the user to select the <b>identity provider</b> of their choice, for example Microsoft. The user is redirected to this identity provider and logs in there. The identity provider returns a token to the system. The system then uses this token to authenticate with any service.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you want the user to log in, without them having to create an account on your system
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Federated_identity">Wikipedia on federated identity<a>
    </ul>
</section>

<?php
include 'template/footer.php';
