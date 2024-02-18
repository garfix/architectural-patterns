<?php
include 'template/data.php';
$pattern = $indexed['Value Object'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An immutable object whose equality is not based on identity</dd>
    </dl>

    <figure><img src="images/value-object.drawio.png"><figcaption>Value object</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Value objects are simple or compound values like Money, Date, or PolicyNumber. They are identified by the combination of their attributes, and don't have an id attribute. Their main purpose is to group some attributes, and to validate their values. Since the attributes are validated on creation, a value object is always valid, and that means that it never has to be checked again.
    </p>
    <p>
        The object is immutable, it's attributes don't change value after they have been created. Their equals function compares all attributes of both objects.
    </p>
    <p>
        Next to its attributes, it may have some utility methods.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Money (amount and currency)
        <li>Date (fixed format; i.e. mmmm-yy-dd)
        <li>DateTime (date and time)
        <li>Address
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you find yourself using <i>string</i> for dates, for example, and you wonder if there's a way to enforce that the format of the date is fixed.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Value_object">Wikipedia on value object<a>
    </ul>
</section>

<?php
include 'template/footer.php';
