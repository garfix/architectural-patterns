<?php
include 'template/data.php';
$pattern = $indexed['Monte Carlo Method'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Uses repeated random sampling to estimate answers to problems that are too complex to solve exactly.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Monte_Carlo_method">Wikipedia: Monte Carlo method</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
