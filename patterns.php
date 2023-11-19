<?php
$title = "All patterns";
include 'template/data.php';
include 'template/header.php';
?>

<section class="pattern-overview">
    <header class="major">
        <h2>All patterns</h2>
    </header>
    <p>An overview of all <?= count($sortedPatterns) ?> patterns cataloged on this site</p>
    <div class="posts">
        <?php foreach ($sortedPatterns as $p): ?>
            <?php showBlock($p) ?>
        <?php endforeach ?>
    </div>
</section>


<?php
include 'template/footer.php';
