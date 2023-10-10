<?php
$title = "Patterns";
include 'template/data.php';
include 'template/header.php';
?>

<section>
    <header class="major">
        <h2>Pattern overview</h2>
    </header>
    <div class="posts">
        <?php foreach ($patterns as $p): ?>
            <article>
                <a href="<?= $p['link'] ?>" class="image"><img src="images/<?= $p['image']?>" alt=""></a>
                <h3><?= $p['name']?></h3>
                <p><?= $p['aliases']?></p>
                <ul class="actions">
                    <li><a href="<?= $p['link']?>" class="button">Show</a></li>
                </ul>
            </article>
        <?php endforeach ?>
    </div>
</section>


<?php
include 'template/footer.php';
