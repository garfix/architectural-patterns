<?php
include 'template/data.php';
$pattern = $indexed['Plugin'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The application can be extended by code modules by third parties.</dd>
    </dl>

    <figure><img src="images/plugin.drawio.png"><figcaption>Plugin architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
       The application exposes an interface that can be implemented by outside developers. They develop the plugin and deploy it. A user can then use these plugins to extend the functionality of the application.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Browser plugins
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you welcome the creativity of outside developers
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Plug-in_(computing)">Wikipedia<a>
    </ul>
</section>

<?php
include 'template/footer.php';
