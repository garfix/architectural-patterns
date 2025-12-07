<?php
include 'template/data.php';
$pattern = $indexed['Decision Tree Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A simple machine learning technique to create a decision tree</dd>
    </dl>

    <figure><img alt="" src="images/decision-tree-learning.drawio.png"><figcaption>Decision Tree Learning</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Decision trees are among the most popular machine learning algorithms given their intelligibility and simplicity. In decision analysis, a decision tree can be used to visually and explicitly represent decisions and decision making.
    </p>

    <figure><img alt="" src="images/Decision_Tree.jpg"><figcaption>Example Decision Tree (<a href="https://commons.wikimedia.org/wiki/File:Decision_Tree.jpg">source</a>)</figcaption></figure>

    <h2>When should you use it?</h2>
    <ul>
        <li>If your data is structured and consists of scalar values
        <li>If you want to create a classifier based on labeled sample data
        <li>If you need your system to be transparent about the decisions it makes
    </ul>

    <p>
        Decision Tree Learning may be faster and easier than a neural network in some cases.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Decision_tree_learning">Wikipedia on decision tree learning<a>
        <li><a href="https://medium.com/@navarai/decision-trees-vs-neural-networks-ff46f47ce0a0">Decision trees vs Neural networks</a>
    </ul>
</section>

<?php
include 'template/footer.php';
