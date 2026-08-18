<?php
include 'template/data.php';
$pattern = $indexed['Case-Based Reasoning'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Case-Based Reasoning solves new problems by finding and adapting solutions that worked in similar past cases. Think of retrieving an old ticket with a similar bug and tweaking that solution for the new one. It differs from rule-based systems by relying on concrete past examples instead of abstracted rules, and from purely statistical methods by emphasizing adaptation of discrete cases.</dd>
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
