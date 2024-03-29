<?php
include 'template/data.php';
$pattern = $indexed['Stable Dependencies Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A module should only depend upon modules that are more stable than it is.</dd>
    </dl>

    <figure><img src="images/stable-dependencies-principle.drawio.png"><figcaption>Stable Dependencies Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The <b>instability</b> of a module is defined as the ratio between the number if incoming dependencies and the number of combined incoming/outgoing dependencies.
    </p>
    <p>
        <b>Instability</b> = # incoming dependencies / (# incoming dependencies + # outgoing dependencies)
    </p>
    <p>
        An <b>stable</b> module is harder to change than an <b>instable</b> module, because it has more modules that need to be checked and changed.
    </p>
    <p>
        An <b>instable</b> module needs to change more often than an <b>stable</b> module, because it has more modules that it depends on.
    </p>
    <p>
        If you build a dependency hierarchy that keeps the most stable modules on the top, and the most instable modules on the bottom, the system will be easier to change and maintain.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://wiki.c2.com/?StableDependenciesPrinciple">C2 on Stable Dependencies Principe<a>
    </ul>
</section>

<?php
include 'template/footer.php';
