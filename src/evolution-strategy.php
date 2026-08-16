<?php
include 'template/data.php';
$pattern = $indexed['Evolution Strategy'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An evolutionary optimization method that adapts mutation size during search, common for continuous parameters.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Evolution_strategy">Wikipedia: Evolution strategy</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
