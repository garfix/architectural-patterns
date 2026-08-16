<?php
include 'template/data.php';
$pattern = $indexed['Conditional Random Field'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A structured model that predicts a whole sequence of labels at once, taking neighboring labels into account.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Models the conditional probability of label sequences given observations by using features over the entire input and optimizing weights globally.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Conditional_random_field">Wikipedia: Conditional random field</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
