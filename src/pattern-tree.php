<?php
$title = "All patterns";
include 'template/data.php';
include 'template/header.php';

function showPattern($patternName) {
    $pattern = getPatternByName($patternName)
?>
<a href="<?= $pattern['link'] ?>"><?= $pattern['name'] ?></a>
<?php
    if (isset($pattern['keywords'])) {
?>
&nbsp;( <?= $pattern['keywords'] ?> )
<?php
    }
?>
<?php
}

function showCategory($catCode, $level) {
    $category = getCategoryByCode($catCode);
    $h = "h" . ($level + 3)
?>
    <h<?= $h ?>><?= $category['name'] ?></h<?= $h ?>>
    <p><?= $category['description'] ?></p>
    <ul>
        <?php foreach ($category['patterns'] as $patternName): ?>
        <li><?php showPattern($patternName)?></li>
        <?php endforeach ?>
    </ul>
    <ul>
        <?php if (isset($category['children'])): ?>
        <?php foreach ($category['children'] as $childCatCode): ?>
        <li class="c<?= $level ?>"><?php showCategory($childCatCode, $level + 1)?></li>
        <?php endforeach ?>
        <?php endif ?>
    </ul>
<?php
}

function showPage($page, $catCodes) {
    ?>
    <h3><?= $page ?></h3>
    <ul>
        <?php foreach ($catCodes as $catCode): ?>
        <li class="c0"><?php showCategory($catCode, 1) ?></li>
        <?php endforeach ?>
    </ul>
<?php
}

?>

<section class="pattern-overview">
    <header class="major">
        <h2>A hierarchy of patterns</h2>
    </header>
    <p>An overview of all <?= count($sortedPatterns) ?> patterns cataloged on this site</p>
    <div class="pattern-tree">
        <?php foreach ($pages as $page => $catCodes): ?>
        <?php showPage($page, $catCodes) ?>
        <?php endforeach ?>
    </div>
</section>


<?php
include 'template/footer.php';
