<?php
$categoryLookup = [];
foreach ($categories as $category) {
    $categoryLookup[$category['code']] = $category;
}

$categoryParentMap = [];
foreach ($categoryLookup as $category) {
    foreach (($category['children'] ?? []) as $childCode) {
        $categoryParentMap[$childCode] = $category['code'];
    }
}

$activeCategoryCodes = [];
if (isset($page) && is_string($page)) {
    $currentCategoryCode = $page;
    while (!empty($currentCategoryCode)) {
        $activeCategoryCodes[] = $currentCategoryCode;
        $currentCategoryCode = $categoryParentMap[$currentCategoryCode] ?? null;
    }
}

if (isset($pattern) && is_array($pattern) && isset($pattern['name'])) {
    foreach ($categories as $category) {
        if (in_array($pattern['name'], $category['patterns'] ?? [], true)) {
            $currentCategoryCode = $category['code'];
            while (!empty($currentCategoryCode)) {
                $activeCategoryCodes[] = $currentCategoryCode;
                $currentCategoryCode = $categoryParentMap[$currentCategoryCode] ?? null;
            }
        }
    }
}

$activeCategoryCodes = array_values(array_unique($activeCategoryCodes));

$hasActiveDescendant = function ($code) use (&$hasActiveDescendant, $categoryLookup, $activeCategoryCodes) {
    if (in_array($code, $activeCategoryCodes, true)) {
        return true;
    }

    foreach (($categoryLookup[$code]['children'] ?? []) as $childCode) {
        if ($hasActiveDescendant($childCode)) {
            return true;
        }
    }

    return false;
};

$renderPatternMenu = function ($patternName) {
    global $patterns, $pattern;
    foreach ($patterns as $candidatePattern) {
        if ($candidatePattern['name'] === $patternName) {
            $isCurrentPattern = isset($pattern) && is_array($pattern) && ($pattern['name'] ?? null) === $patternName;
            ?>
            <li class="pattern-item<?= $isCurrentPattern ? ' current' : '' ?>">
                <a href="<?= $candidatePattern['link'] ?>" class="<?= $isCurrentPattern ? ' current' : '' ?>"><?= $candidatePattern['name'] ?></a>
            </li>
            <?php
            return;
        }
    }
};

$renderCategoryMenu = function ($code, $depth = 0, $parentPageCode = null) use (&$renderCategoryMenu, $categoryLookup, $page, $hasActiveDescendant, $renderPatternMenu, $activeCategoryCodes, $categoryParentMap) {
    $category = $categoryLookup[$code] ?? null;
    if ($category === null) {
        return;
    }

    $children = $category['children'] ?? [];
    $patternNames = $category['patterns'] ?? [];
    $hasChildren = !empty($children) || !empty($patternNames);
    $isCurrent = ($page ?? null) === $category['code'];
    $isOpen = in_array($category['code'], $activeCategoryCodes, true) || $hasActiveDescendant($category['code']);
    $menuItemClass = 'menu-item' . ($isCurrent ? ' current' : '') . ($depth > 0 ? ' nested' : '') . ($isOpen ? ' is-open' : '');
    $targetPage = $depth > 0 ? ($parentPageCode ?? $categoryParentMap[$code] ?? $category['code']) : $category['code'];
    $targetHref = $depth > 0 ? $targetPage . '#' . $code : $category['code'];
    ?>
    <li class="<?= $menuItemClass ?>" style="margin-left: <?= min($depth * 0.9, 2.5) ?>em;">
        <div class="menu-row">
            <a href="<?= htmlspecialchars($targetHref, ENT_QUOTES) ?>" class="menu-link<?= $isCurrent ? ' current' : '' ?>"><?= $category['name'] ?></a>
            <?php if ($hasChildren): ?>
                <button
                    type="button"
                    class="menu-toggle opener<?= $isOpen ? ' active' : '' ?>"
                    data-target="submenu-<?= htmlspecialchars($category['code'], ENT_QUOTES) ?>"
                    aria-expanded="<?= $isOpen ? 'true' : 'false' ?>"
                    aria-label="Toggle <?= htmlspecialchars($category['name'], ENT_QUOTES) ?>"
                ></button>
            <?php endif ?>
        </div>
        <?php if ($hasChildren): ?>
            <ul id="submenu-<?= htmlspecialchars($category['code'], ENT_QUOTES) ?>" class="submenu<?= $isOpen ? ' is-open' : '' ?>">
                <?php foreach ($children as $childCode): ?>
                    <?php $renderCategoryMenu($childCode, $depth + 1, $category['code']); ?>
                <?php endforeach ?>
                <?php foreach ($patternNames as $patternName): ?>
                    <?php $renderPatternMenu($patternName); ?>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </li>
    <?php
};
?>

<?php
    $urlCode = basename($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = [];
    foreach ($pages as $page) {
        if ($page['code'] === $urlCode) {
            $level = "page";
            $path = [$page['code']];
        }
        foreach ($page['categories'] as $categoryCode) {
            $category = getCategoryByCode($categoryCode);
            if ($category['code'] === $urlCode) {
                    $level = "category";
                    $path = [$category['code']];
                }
            foreach ($category['children'] as $childCode) {
                $child = getCategoryByCode($childCode);
                if ($child['code'] === $urlCode) {
                    $level = "category";
                    $path = [$category['code']];
                }
            }
            foreach ($category['patterns'] as $patternName) {
                $pattern = getPatternByName($patternName);
                if ($pattern['code'] === $urlCode) {
                    $level = "category";
                    $path = [$category['code']];
                }
            }
        }
    }

?>

<?php foreach ($pages as $page): ?>
    <?php
        $code = $page['code'];
        $title = $page['title'];
        $categoryCodes = $page['categories'];
        $pageOpen = in_array($page['code'], $path);
    ?>
    <li class="menu-group<?= $pageOpen ? " is-open" : "" ?>">
        <a href="<?= $code ?>"><span class="opener<?= $pageOpen ? ' active' : '' ?>"><?= $title ?></span></a>
        <ul class="submenu">
            <?php foreach ($categoryCodes as $categoryCode): ?>
                <?php
                    $category = getCategoryByCode($categoryCode);
                ?>
                <li class="menu-item" style="margin-left: 2.5 ?>em;">
                    <div class="menu-row">
                        <a href="<?= htmlspecialchars($targetHref, ENT_QUOTES) ?>" class="menu-link<?= $isCurrent ? ' current' : '' ?>"><?= $category['name'] ?></a>
                        <?php if ($hasChildren): ?>
                            <span type="button" class="menu-toggle opener<?= $isOpen ? ' active' : '' ?>"></span>
                        <?php endif ?>
                    </div>
                    <?php if ($hasChildren): ?>
                        <ul id="submenu-<?= htmlspecialchars($category['code'], ENT_QUOTES) ?>" class="submenu<?= $isOpen ? ' is-open' : '' ?>">
                            <?php foreach ($children as $childCode): ?>
                            <ul id="submenu-<?= htmlspecialchars($category['code'], ENT_QUOTES) ?>" class="submenu<?= $isOpen ? ' is-open' : '' ?>">
                                <?php foreach ($children as $childCode): ?>
                                    <?php $renderCategoryMenu($childCode, $depth + 1, $category['code']); ?>
                                <?php endforeach ?>
                                <?php foreach ($patternNames as $patternName): ?>
                                    <?php $renderPatternMenu($patternName); ?>
                                <?php endforeach ?>
                            </ul>
                            <?php endforeach ?>
                            <?php foreach ($patternNames as $patternName): ?>
                                <?php $renderPatternMenu($patternName); ?>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                </li>
            <?php endforeach ?>
        </ul>
    </li>
<?php endforeach ?>
