<?php
include 'template/data.php';
$pattern = $indexed['Markov Random Field'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An undirected graph of variables where each one depends on its neighbors, without assuming direction of influence.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>An undirected graphical model where variables interact locally; inference estimates marginals using local potentials and message passing or sampling.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_random_field">Wikipedia: Markov random field</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
