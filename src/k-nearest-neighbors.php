<?php
include 'template/data.php';
$pattern = $indexed['k-Nearest Neighbors'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Classifies a new data point based on the majority label among its closest neighbors in the training data.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Classifies or predicts by finding the nearest labeled examples in the training data and using their labels or values to decide.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/K-nearest_neighbors_algorithm">Wikipedia: k-Nearest Neighbors</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
