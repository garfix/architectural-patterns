<?php
include 'template/data.php';
$pattern = $indexed['Decision Tree Learning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Decision Trees split data by asking sequential yes/no questions to reach a prediction. Each branch tests a feature; leaves hold predictions. Visualize a flowchart that routes each example down to a class or value. Trees differ from black-box models because they are interpretable and easy to inspect. Compared to ensemble methods (random forest, boosting), a single tree is simpler and more prone to overfitting, but it's fast and transparent.</dd>
    </dl>
    <?php showImage($pattern) ?>
<h2>How does it work?</h2>
    <p>Trees split data by feature thresholds to partition space; ensemble methods build many trees on bootstrapped samples and aggregate predictions. Focus on feature selection, depth control, and understanding variable importance when using these models.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Loan approval rules — Learn interpretable decision paths to predict creditworthiness for regulatory reviews.</li>
        <li>Medical triage heuristics — Derive simple rule-based decisions from clinical datasets for initial screening.</li>
        <li>Customer churn segmentation — Identify decision splits that separate high and low churn probability groups.</li>
    </ul>




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
