<?php
include 'template/data.php';
$pattern = $indexed['Conditional Random Field'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Conditional Random Field (CRF) models the conditional distribution of label sequences given inputs, capturing dependencies between neighboring labels (useful in sequence labeling). Think of labeling a sentence where the label for a word depends on nearby labels as well as the input features. CRFs differ from HMMs by being discriminative (modeling p(labels|inputs) directly) and from simple classifiers by modeling structured outputs jointly.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Conditional Random Field algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Sequence labelling (NER) — Tag tokens in sentences with labels by modelling conditional dependencies across labels.</li>
        <li>Part-of-speech tagging — Model label interactions to improve tagging accuracy over independent classifiers.</li>
        <li>Handwriting recognition post-processing — Refine per-character predictions using CRF smoothing.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Training is computationally expensive compared to simpler classifiers</li>
        <li>Feature engineering is often needed to get good performance</li>
        <li>Inference (decoding) can be slow on long sequences</li>
        <li>Scaling to large label sets increases complexity significantly</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Conditional_random_field">Wikipedia: Conditional random field</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
