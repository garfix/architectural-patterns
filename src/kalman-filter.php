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
    <h2>How does it work?</h2>
    <p>Keep a running estimate of a system's state by repeating two steps: predict what will happen next, then correct that prediction using a new measurement. Over time the estimate stays accurate even with noisy data.</p>

        <li><a href="https://en.wikipedia.org/wiki/Kalman_filter">Wikipedia: Kalman filter</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
