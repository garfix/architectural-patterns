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


    <h2>How does it work?</h2>
    <p>Make small changes that improve the solution. Keep changing until no small change makes it better. If you get stuck, try starting from a different place.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Hill_climbing">Wikipedia: Hill climbing</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
