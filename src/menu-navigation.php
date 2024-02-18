<?php
include 'template/data.php';
$pattern = $indexed['Menu Navigation'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>In a GUI, menu navigation provides navigational links to the main areas of an application or OS.</dd>
    </dl>

    <p>
        Menu navigation is implemented by the <b>menu bar</b>. A menu bar consists of menu items. Each item contains the name of the page it, an icon representing it, or both. An application often has multiple menus, even on the same page.
    </p>
    <p>

    </p>
    <p>
        The pattern is so ubiquitous that it takes some effort to imagine what an application without a menu bar would look like.
    </p>

    <figure><img src="images/menu.drawio.png"><figcaption>A menu bar</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Almost every GUI application has a menu bar
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Menu_bar">Wikipedia</a>
    </ol>
</section>

<?php
include 'template/footer.php';
