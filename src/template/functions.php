<?php

function getCategoryByCode($code) {
    global $categories;

    foreach ($categories as $category) {
        if ($category['code'] == $code) {
            return $category;
        }
    }

    return null;
}

function getPatternByName($name) {
    global $patterns;

    foreach ($patterns as $pattern) {
        if ($pattern['name'] == $name) {
            return $pattern;
        }
    }

    return null;
}
function showHeader($pattern) {
?>

<header class="content">
    <h1><?= $pattern['name'] ?></h1>
    <p><?= isset($p['keywords']) ? $p['keywords'] : "" ?></p>
</header>

<?php
}

function showBlock($p) {
?>
<article>
    <a href="<?= $p['link'] ?>" class="image"><img alt="" src="images/<?= $p['image'] ?>"></a>
    <h3><?= $p['name']?></h3>
    <p><?= isset($p['keywords']) ? $p['keywords'] : "" ?></p>
    <ul class="actions">
        <li><a href="<?= $p['link']?>" class="button">Show</a></li>
    </ul>
</article>
<?php
}
