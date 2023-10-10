<?php

function showHeader($pattern) {
?>

<header class="content">
    <h1><?= $pattern['name'] ?></h1>
    <p><?= $pattern['aliases'] ?></p>
</header>

<?php
}
