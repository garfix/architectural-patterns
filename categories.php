<?php
$title = "Categories";
include 'template/header.php';
include 'data.php';
?>

<section>
    <header class="content">
        <h1>Pattern categories</h1>
    </header>
    <p>
        If you're looking for a architectural pattern for your project, it may be useful to have a preselection of possible candidates. This page shows the patterns by category. A pattern may be appear in multiple categories.
    </p>

    <?php foreach ($categories as $category): ?>
        <h2><?= $category['name'] ?></h2>
        <ul>
            <?php foreach ($patterns as $pattern): ?>
                <?php if (in_array($category['code'], $pattern['categories'])): ?>
                    <li><a href="<?= $pattern['link'] ?>"><?= $pattern['name'] ?></a></li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>

</section>

<?php
include 'template/footer.php';
