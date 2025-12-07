<?php
include 'template/data.php';
$pattern = $indexed['Standardized Date Format'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A standardized representation of calendar dates</dd>
    </dl>

    <figure><img alt="" src="images/iso-8601.drawio.png"><figcaption>ISO 8601</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The world has several ways of formatting dates: 31-06-2024, 06/31/24. Some date are ambiguous when the locale is unknown (i.e. 06/07/07). ISO-8601 is an effort to create a standard way of storing dates: YYYY-MM-DD.
    </p>
    <p>
        An example:
        <pre>1997-07-16</pre>
    </p>

    <h2>When should you use it?</h2>
    <p>
        Always store dates in a fixed format. ISO 8601 is a good standard to do this.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/ISO_8601">ISO 8601</a>
    </ul>
</section>

<?php
include 'template/footer.php';
