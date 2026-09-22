<?php

function renderPatternMenu($patternNames, $path) {
?>
<ul class="submenu">
<?php foreach ($patternNames as $patternName): ?>
    <?php $pattern = getPatternByName($patternName) ?>
    <?php $current = in_array($pattern['link'], $path) ?>
    <li class="pattern-item<?= $current ? ' current' : '' ?>">
        <a href="<?= $pattern['link'] ?>"><?= $pattern['name'] ?></a>
    </li>
<?php endforeach ?>
</ul>
<?php
};

function renderCategoryMenu($categoryCodes, $path, $parentCategoryCode) {
?>
    <ul class="submenu">
    <?php foreach ($categoryCodes as $categoryCode): ?>
        <?php
            $category = getCategoryByCode($categoryCode);
            $categoryTitle = $category['name'];
            $categoryOpen = in_array($categoryCode, $path);
            $link = $parentCategoryCode ? $parentCategoryCode . "?child=$categoryCode" : $categoryCode;
        ?>
        <li class="menu-item<?= $categoryOpen ? " is-open" : "" ?>">
            <a href="<?= $link ?>"><span class="opener<?= $categoryOpen ? ' active' : '' ?>"><?= $categoryTitle ?></span></a>
            <?php renderPatternMenu($category['patterns'], $path); ?>
            <?php renderCategoryMenu($category['children'], $path, $categoryCode); ?>
        </li>
    <?php endforeach ?>
    </ul>
<?php
};

function getPath($pages) {
    $urlCode = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $args);
    $urlChildCode = $args['child'] ?? null;
    $path = [];
    foreach ($pages as $page) {
        if ($page['code'] === $urlCode) {
            $path = [$page['code']];
        }
        foreach ($page['categories'] as $categoryCode) {
            $category = getCategoryByCode($categoryCode);
            if ($category['code'] === $urlCode) {
                    $path = [$page['code'], $category['code']];
                }
            foreach ($category['children'] as $childCode) {
                $child = getCategoryByCode($childCode);
                if ($child['code'] === $urlChildCode) {
                    $path = [$page['code'], $category['code'], $child['code']];
                }
                foreach ($child['patterns'] as $patternName) {
                    $pattern = getPatternByName($patternName);
                    if ($pattern['link'] === $urlCode) {
                        $path = [$page['code'], $category['code'], $child['code'], $pattern['link']];
                    }
                }
            }
            foreach ($category['patterns'] as $patternName) {
                $pattern = getPatternByName($patternName);
                if ($pattern['link'] === $urlCode) {
                    $path = [$page['code'], $category['code'], $pattern['link']];
                }
            }
        }
    }

    return $path;
}
?>

<?php $path = getPath($pages) ?>
<?php foreach ($pages as $page): ?>
    <?php
        $pageCode = $page['code'];
        $pageTitle = $page['title'];
        $categoryCodes = $page['categories'];
        $pageOpen = in_array($page['code'], $path);
    ?>
    <li class="menu-group<?= $pageOpen ? " is-open" : "" ?>">
        <a href="<?= $pageCode ?>"><span class="opener<?= $pageOpen ? ' active' : '' ?>"><?= $pageTitle ?></span></a>
        <?php renderCategoryMenu($page['categories'], $path, null); ?>
    </li>
<?php endforeach ?>
