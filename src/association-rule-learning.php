<?php
include 'template/data.php';
$pattern = $indexed['Association Rule Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Discovers "if this, then that" relationships in large datasets, like items frequently bought together.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Finds frequent co-occurring itemsets in data and derives rules that express the likelihood of one item appearing with another.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Association_rule_learning">Wikipedia: Association Rule Learning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
