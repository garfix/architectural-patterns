<?php
$title = "Patterns";
include 'template/data.php';
include 'template/header.php';
?>

<section>
    <header class="major">
        <h2>All patterns</h2>
    </header>
    <p>An overview of all <?= count($patterns) ?> patterns cataloged on this site</p>
    <div class="posts">
        <?php foreach ($patterns as $p): ?>
            <?php showBlock($p) ?>
        <?php endforeach ?>
    </div>
</section>


<?php
include 'template/footer.php';
