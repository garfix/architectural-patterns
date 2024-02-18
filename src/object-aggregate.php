<?php
include 'template/data.php';
$pattern = $indexed['Object Aggregate'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An aggregate is a cluster of objects that can be treated as a single unit. One of these objects is the root</dd>
    </dl>

    <figure><img src="images/object-aggregate.drawio.png"><figcaption>Object Aggregate</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        "A DDD aggregate is a cluster of domain objects that can be treated as a single unit. An example may be an order and its line-items, these will be separate objects, but it's useful to treat the order (together with its line items) as a single aggregate.
        <br>
        An aggregate will have one of its component objects be the aggregate root. Any references from outside the aggregate should only go to the aggregate root. The root can thus ensure the integrity of the aggregate as a whole." - Martin Fowler
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Order and line items
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When different processes should not modify part of the aggregate simultaneously, because it would corrupt its integrity
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/bliki/DDD_Aggregate.html">Martin Fowler on DDD aggregate<a>
    </ul>
</section>

<?php
include 'template/footer.php';
