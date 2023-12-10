<?php
include 'template/data.php';
$pattern = $indexed['Modules'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A grouping of functions and data that belong together conceptually.</dd>
    </dl>

    <figure><img src="images/module.drawio.png"><figcaption>Module architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Each module specializes in one functional area, but can access any of the other modules as well.
    </p>

    <h2>When should you use it?</h2>
    <p>
        This is a common way to split a large code base into manageable parts.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Relation management module
        <li>Order management module
        <li>Cocument management module
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Each module has its own directory
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Modular_programming">Wikipedia on modular design</a>
    </ul>
</section>

<?php
include 'template/footer.php';
