<?php
include 'template/data.php';
$pattern = $indexed['Single Sign-on'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A central identity server that provides authentication to all servers in a domain.</dd>
    </dl>

    <figure><img src="images/single-sign-on.drawio.png"><figcaption>Single Sign-on architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        There are two aspects to this: account creation and log in.
        Basic SSO means the user needs a single account for multiple related servers.
        But true single sign-on also allows the user to log in once and access services without re-entering their credentials.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When an application consists of multiple servers and you don't want the user to create accounts for each of them
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Single_sign-on">Wikipedia<a>
    </ul>
</section>

<?php
include 'template/footer.php';
