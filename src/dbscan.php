<?php
include 'template/data.php';
$pattern = $indexed['DBSCAN'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Groups points that are densely packed together and marks isolated points as outliers.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Clusters by finding dense regions: points with enough neighbors within a radius form clusters while sparse points are labeled as noise.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/DBSCAN">Wikipedia: DBSCAN</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
