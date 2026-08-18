<?php
include 'template/data.php';
$pattern = $indexed['k-Nearest Neighbors'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>K-Nearest Neighbors (k-NN) classifies new points based on the labels of the k closest training examples. It's simple and nonparametric: store the data and use distance at query time. Think of asking the nearest neighbors what label they have and going with the majority. K-NN differs from models that summarize data into parameters (like SVMs or neural networks) because it keeps raw examples and can be slow at prediction time but very flexible.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Classifies or predicts by finding the nearest labeled examples in the training data and using their labels or values to decide.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/K-nearest_neighbors_algorithm">Wikipedia: k-Nearest Neighbors</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
