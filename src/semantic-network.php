<?php
include 'template/data.php';
$pattern = $indexed['Semantic Network'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Represents knowledge as a graph of concepts connected by labeled relationships.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Semantic_network">Wikipedia: Semantic network</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
