<?php
include 'template/data.php';
$pattern = $indexed['Temporal Difference Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Updates predictions using the difference between successive estimates, learning before the final outcome is known.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Temporal_difference_learning">Wikipedia: Temporal difference learning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
