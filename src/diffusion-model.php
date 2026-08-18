<?php
include 'template/data.php';
$pattern = $indexed['Diffusion Model'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Diffusion models learn to generate data by reversing a process that gradually corrupts data with noise. The model learns to denoise step by step until a clean sample emerges. Think of learning a multi-step cleanup routine: start with noise and iteratively remove it to create data. Diffusion models differ from GANs by optimizing likelihood-like objectives and tend to be more stable, though often slower at sampling.</dd>
    </dl>
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Diffusion Model architectures are specialised neural designs; they define layer types and connectivity that bias the model to particular data structures. Implementations balance depth, width, and compute considerations for practical training.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Diffusion_model">Wikipedia: Diffusion model</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
