<?php
include 'template/data.php';
$pattern = $indexed['Automated Theorem Proving'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Uses formal logic to automatically prove or disprove mathematical statements.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Automated_theorem_proving">Wikipedia: Automated theorem proving</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
