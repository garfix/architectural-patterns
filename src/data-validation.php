<?php
include 'template/data.php';
$pattern = $indexed['Data Validation'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Make sure the incoming data has the correct type or format</dd>
    </dl>

    <figure><img alt="" src="images/data-validation.drawio.png"><figcaption>Data validation</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Incoming data that has the wrong data type (i.e a float where an integer is expected) or the wrong format (i.e. "2023/01/18" where "2023-01-18" is expected) can cause errors in the system. They should be detected and denied at the first opportunity when it comes in to the system.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Data type: float instead of string
        <li>Range: a string that is too long, a negative integer
        <li>String encoding: ISO-8859-1 in stead of UTF-8
        <li>Non-existing enumeration value
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Whenever incoming data is not under your control
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Data_validation">Wikipedia on data validation<a>
    </ul>
</section>

<?php
include 'template/footer.php';
