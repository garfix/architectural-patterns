<?php
include 'template/data.php';
$pattern = $indexed['Single Responsibility Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A class should have only one reason to change, meaning that a class should only have one responsibility or job.</dd>
    </dl>

    <figure><img src="images/single-responsibility.drawio.png"><figcaption>Single Responsibility Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The principle is intuitively simple, but defies good definitions. Keep a class simple. Don't make it store things, and draw things, and implement all use cases. Each class should just do one of these things.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>It helps to build a maintainable system.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Single_responsibility_principle">Wikipedia on Single Responsibility Principle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
