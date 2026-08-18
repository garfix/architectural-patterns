<?php
include 'template/data.php';
$pattern = $indexed['Association Rule Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Association Rule Learning finds rules of the form "if items A and B appear, item C often appears too" — common in market-basket analysis. Imagine mining transaction records to find which products are frequently bought together. It differs from clustering and classification because it discovers co-occurrence rules rather than partitions or labels, and it works well for transactional or binary feature data.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Finds frequent co-occurring itemsets in data and derives rules that express the likelihood of one item appearing with another.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Association_rule_learning">Wikipedia: Association Rule Learning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
