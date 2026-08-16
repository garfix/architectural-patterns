<?php
include 'template/data.php';
$pattern = $indexed['Case-Based Reasoning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Solves new problems by adapting solutions that worked for similar past problems.</dd>
    </dl>

    <h2>How does it work?</h2>
    <p>Solves new problems by retrieving similar past cases from a case library, adapting their solutions, and storing new experiences for future use.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Case-based_reasoning">Wikipedia: Case-Based Reasoning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
