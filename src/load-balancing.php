<?php
include 'template/data.php';
$pattern = $indexed['Load Balancing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Having a pool of identical servers, pick on of them to do the task.</dd>
    </dl>

    <figure><img src="images/load-balancing.drawio.png"><figcaption>Load balancing architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        To scale horizontally one can add more servers that do the same job. An extra server (load balancer) is needed to assign an incoming task to one of them.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>A load balancer server
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Use it when to load can get too high for a single machine, given that the process can be copied onto other machines.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Extra infrastructure may need to be set up for load balancing.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Load_balancing_(computing)">Wikipedia: load balancing<a>
    </ul>
</section>

<?php
include 'template/footer.php';
