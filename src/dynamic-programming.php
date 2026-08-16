<?php
include 'template/data.php';
$pattern = $indexed['Dynamic Programming'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Solves complex problems by breaking them into overlapping subproblems and reusing solutions to those subproblems.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Split a big problem into smaller parts, solve each small part once, and reuse those results to build the full solution. This avoids repeating the same work over and over.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Dynamic_programming">Wikipedia: Dynamic programming</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
