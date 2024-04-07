<?php
include 'template/data.php';
$pattern = $indexed['Unicode'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A standardized representation of text</dd>
    </dl>

    <figure><img src="images/unicode.drawio.png"><figcaption>Unicode</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The world has hundreds of writing systems: latin, chinese, arabic, devanagari, etc, etc. Unicode was designed to catch all of these in a single format. Each character is represented by a code point and stored in one of several "encodings", of which UTF-8 is the most popular one.
    </p>
    <p>
        An example:
        <pre>1997-07-16T19:20:30.45+01:00</pre>
    </p>


    <h2>When should you use it?</h2>
    <p>
        When your application is used by users with different writing systems.<br>
        If your application has only a very limited user group, a specialized encoding (such as Latin-1 for Western Europe) could be used, but the gain is minimal and converting to Unicode later can be a hassle.<br>
        The choice for Unicode is basically a no-brainer.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Unicode">Unicode</a>
    </ul>
</section>

<?php
include 'template/footer.php';
