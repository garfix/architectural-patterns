<?php
include 'template/data.php';
$pattern = $indexed['Modules'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The functional areas of an application.</dd>
    </dl>
    <p>
        Similar functionality of an application is usually grouped in a module, for better findability of the code, and to reduce duplication.
    </p>

    <figure><img src="images/modules.drawio.png"><figcaption>Modules architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Each module specializes in one functional area, but can access any of the other modules as well. All modules have access to a core that provides common functionality like database access, access control, error handling and logging.
    </p>

    <h2>When should you use it?</h2>
    <p>
        In systems that provide different types of functionality that are easily separable.
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
