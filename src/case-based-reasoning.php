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
    <?php showImage($pattern) ?>

    


    <h2>How does it work?</h2>
    <p>Case-Based Reasoning methods manipulate symbols or rules: represent knowledge explicitly, and apply inference algorithms (forward/backward chaining, constraint propagation, search). Implementations focus on rule ordering, conflict resolution, and efficient indexing of facts.</p>
    
    
    <h2>Examples</h2>
    <ul>
        <li>Legal precedent retrieval — Find past cases with similar facts to support legal arguments.</li>
        <li>Help-desk ticket reuse — Suggest solutions based on previously solved tickets with similar symptoms.</li>
        <li>Design reuse — Adapt past engineering designs to new requirements by analogical reasoning.</li>
    </ul>




<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Case-based_reasoning">Wikipedia: Case-Based Reasoning</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
