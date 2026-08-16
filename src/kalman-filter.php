<?php
include 'template/data.php';
$pattern = $indexed['Kalman Filter'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Estimates the true state of a moving or changing system from noisy, incomplete measurements over time.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Kalman_filter">Wikipedia: Kalman filter</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
