<?php
include 'template/data.php';
$pattern = $indexed['Hill Climbing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Repeatedly moves to a better neighboring solution until no improvement can be found.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hill_climbing">Wikipedia: Hill climbing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
