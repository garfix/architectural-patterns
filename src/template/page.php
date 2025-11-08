<?php
$category = getCategoryByCode($page);
$title = $category['name'];
include 'template/header.php';
$children = $category['children'] ? $category['children'] : [];
$mainBlocks = [];
foreach ($patterns as $p) {
    if (isset($p['categories']) && in_array($category['code'], $p['categories'])) {
        $mainBlocks[] = $p;
    }
}
?>

<section>
    <header class="content">
        <h1><?= $category['name'] ?></h1>
    </header>
    <p><?= $category['description'] ?></p>
</section>

<?php if (count($category['patterns']) > 0): ?>
<section class="pattern-overview">
    <div class="posts">
        <?php foreach ($category['patterns'] as $patternName): ?>
            <?php showBlock(getPatternByName($patternName)) ?>
        <?php endforeach ?>
    </div>
</section>
<?php endif ?>

<?php foreach ($children as $childCode): ?>
    <?php $child = getCategoryByCode($childCode); ?>
    <section class="pattern-overview">
        <h2><?= $child['name'] ?></h2>
        <p><?= $child['description'] ?></p>
        <div class="posts">
            <?php foreach ($child['patterns'] as $p): ?>
                <?php showBlock(getPatternByName($p)) ?>
            <?php endforeach ?>
        </div>
    </section>
<?php endforeach ?>

</section>

<?php
include 'template/footer.php';
