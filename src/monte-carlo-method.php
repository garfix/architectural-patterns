<?php
include 'template/data.php';
$pattern = $indexed['Monte Carlo Method'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>

    <h2>How does it work?</h2>
    <p>Use random samples to estimate an answer. Run many trials, measure the result in each trial, and average them. More trials usually give a better estimate.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Monte_Carlo_method">Wikipedia: Monte Carlo method</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
