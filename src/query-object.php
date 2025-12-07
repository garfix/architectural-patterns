<?php
include 'template/data.php';
$pattern = $indexed['Query Object'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An aggregate that represents a database query and allows it to be composed programmatically</dd>
    </dl>

    <figure><img alt="" src="images/query-object.drawio.png"><figcaption>Query Object</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        An SQL query (or any other compound query) is represented by an aggregate object structure. It can be modified by calling methods on each of these objects. At any time its SQL equivalent can be produced by calling a method on the root object.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>SQLAlchemy (Python)
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you find yourself glueing pieces of sql query together a lot
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>If the query object uses different names, or even a different conceptual framework, from the query language it is based on, the developer will need to learn this domain language and map concepts. This makes it harder to learn and debug.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/eaaCatalog/queryObject.html">Martin Fowler on Query Object<a>
    </ul>
</section>

<?php
include 'template/footer.php';
