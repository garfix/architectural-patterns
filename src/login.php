<?php
include 'template/data.php';
$pattern = $indexed['Login'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The user has to prove to the system that the identity he provides is actually theirs</dd>
    </dl>

    <p>
        This can be done by providing a username or email, together with a password or PIN code.
    </p>

    <figure><img alt="" src="images/login.drawio.png"><figcaption>Login</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The user may provide a username and a password. The username represents their identity. The password proves that the identity is theirs.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you need the user to prove their identity because the resources provided should be accessible only to them.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Authentication">Wikipedia on authentication<a>
    </ul>
</section>

<?php
include 'template/footer.php';
