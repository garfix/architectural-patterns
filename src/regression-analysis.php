<?php
include 'template/data.php';
$pattern = $indexed['Regression Analysis'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Models the relationship between input variables and an outcome, used to predict or explain that outcome.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
    <h2>How does it work?</h2>
    <p>Pick a simple formula that relates inputs to outputs and adjust its numbers so the formula matches known examples. Check how well the formula predicts new data and fix it if it performs poorly.</p>

        <li><a href="https://en.wikipedia.org/wiki/Regression_analysis">Wikipedia: Regression analysis</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
