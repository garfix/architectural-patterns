<?php
include 'template/data.php';
$pattern = $indexed['Long Short-Term Memory'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A recurrent network design with gates that let it remember or forget information over long sequences.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Long_short-term_memory">Wikipedia: Long Short-Term Memory</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
