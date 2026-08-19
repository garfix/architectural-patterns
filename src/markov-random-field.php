<?php
include 'template/data.php';
$pattern = $indexed['Markov Random Field'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A Markov Random Field (MRF) models variables with an undirected graph where each variable depends on its neighbors; it's suited for spatial or relational data where directionality is not natural. Imagine a grid where each cell's value is influenced by adjacent cells. MRFs differ from Bayesian networks by being undirected and focusing on local compatibility rather than parent-child causal structure.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Markov Random Field algorithms typically represent uncertainty explicitly and use probability calculations to combine data and model assumptions. Implementations focus on numerical stability, how to represent distributions (parametric vs sampled), and efficient updates when new data arrive.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Image denoising — Model pixel neighbourhoods with MRFs for pairwise-smoothness priors in restoration.</li>
        <li>Spatial label smoothing — Enforce local consistency in segmentation tasks using MRF priors.</li>
        <li>Markov networks for social ties — Model undirected relationships among entities in network analysis.</li>
    </ul>
    
    <h2>Problems</h2>
    <ul>
        <li>Exact inference is generally intractable, requiring approximations</li>
        <li>Computing the normalizing constant (partition function) is expensive</li>
        <li>Choosing appropriate potential functions for the domain</li>
        <li>Training can be slow due to repeated inference in the loop</li>
    </ul>






<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Markov_random_field">Wikipedia: Markov random field</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
