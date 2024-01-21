<?php
include 'template/data.php';
$pattern = $indexed['Common Reuse Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Don't force users of a module to depend on things they don't need.</dd>
    </dl>

    <figure><img src="images/common-reuse-principle.drawio.png"><figcaption>Common Reuse Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        If you develop a public library, be relunctant to make your code depend on external modules. Your users will now be dependent on these other modules as well.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://wiki.c2.com/?CommonReusePrinciple">C2 on Common Reuse Principle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
