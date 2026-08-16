<?php
include 'template/data.php';
$pattern = $indexed['Diffusion Model'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Learns to generate data by reversing a process that gradually adds noise, denoising step by step.</dd>
    </dl>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Diffusion_model">Wikipedia: Diffusion model</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
