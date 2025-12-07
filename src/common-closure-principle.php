<?php
include 'template/data.php';
$pattern = $indexed['Common Closure Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Gather functionality in a module that changes for the same reasons and at the same time.</dd>
    </dl>

    <figure><img alt="" src="images/common-closure-principle.drawio.png"><figcaption>Common Closure Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        This is the Single Responsibility Principle for modules.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://wiki.c2.com/?CommonClosurePrinciple">C2 on Common Closure Principle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
