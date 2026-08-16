<?php
include 'template/data.php';
$pattern = $indexed['Principal Component Analysis'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Reduces data to fewer dimensions by finding the directions along which it varies the most.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Principal_component_analysis">Wikipedia: Principal Component Analysis</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
