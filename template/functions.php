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

function showHeader($pattern) {
?>

<header class="content">
    <h1><?= $pattern['name'] ?></h1>
    <p><?= $pattern['aliases'] ?></p>
</header>

<?php
}

function showBlock($p) {
?>
<article>
    <a href="<?= $p['link'] ?>" class="image"><img src="images/<?= $p['image']?>" alt=""></a>
    <h3><?= $p['name']?></h3>
    <p><?= $p['aliases']?></p>
    <ul class="actions">
        <li><a href="<?= $p['link']?>" class="button">Show</a></li>
    </ul>
</article>
<?php
}
