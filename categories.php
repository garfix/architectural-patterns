<?php
$title = "Categories";
include 'template/data.php';
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Pattern categories</h1>
    </header>
    <p>
        If you're looking for a architectural pattern for your project, it may be useful to have a preselection of possible candidates. This page shows the patterns by category. A pattern may be appear in multiple categories.
    </p>
</section>

    <?php foreach ($categories as $category): ?>
    <section>
        <h2><?= $category['name'] ?></h2>
        <p><?= $category['description'] ?></p>
        <div class="posts">
            <?php foreach ($patterns as $p): ?>
                <?php if (in_array($category['code'], $p['categories'])): ?>

                <article>
                    <a href="<?= $p['link'] ?>" class="image"><img src="images/<?= $p['image']?>" alt=""></a>
                    <h3><?= $p['name']?></h3>
                    <p><?= $p['aliases']?></p>
                    <ul class="actions">
                        <li><a href="<?= $p['link']?>" class="button">Show</a></li>
                    </ul>
                </article>

                <?php endif ?>
            <?php endforeach ?>
        </div>
    </section>
    <?php endforeach ?>

</section>

<?php
include 'template/footer.php';
