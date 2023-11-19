<?php
$category = getCategoryByCode($page);
$title = $category['name'];
include 'template/header.php';
$children = $category['children'] ? $category['children'] : [];
?>

<section>
    <header class="content">
        <h1><?= $category['name'] ?></h1>
    </header>
    <p><?= $category['description'] ?></p>
</section>

<section class="pattern-overview">
    <div class="posts">
        <?php foreach ($patterns as $p): ?>
            <?php if (in_array($category['code'], $p['categories'])): ?>
                <?php showBlock($p) ?>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</section>


    <?php foreach ($children as $childCode): ?>
        <?php $child = getCategoryByCode($childCode); ?>
        <section class="pattern-overview">
            <h2><?= $child['name'] ?></h2>
            <p><?= $child['description'] ?></p>
            <div class="posts">
                <?php foreach ($patterns as $p): ?>
                    <?php if (in_array($child['code'], $p['categories'])): ?>
                        <?php showBlock($p) ?>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </section>
    <?php endforeach ?>

</section>

<?php
include 'template/footer.php';
