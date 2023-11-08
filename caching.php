<?php
include 'template/data.php';
$pattern = $indexed['Caching'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Store the result of a heavy request in order to serve it immediately in the following requests.</dd>
    </dl>

    <figure><img src="images/caching.drawio.png"><figcaption>Caching architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        When a request for data is made, and it is computationally expensive to retrieve it, first the cache is checked for the result. If it's not already there, the result is calculated, placed in the cache, and returned.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Caching web pages
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When calculating a resource takes too long
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>First hit is slow
        <li>Cache invalidation
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Cache_(computing)">Wikipedia<a>
    </ul>
</section>

<?php
include 'template/footer.php';
