<?php
include 'template/data.php';
$pattern = $indexed['Evolution Strategy'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Evolution Strategies (ES) are evolutionary methods focused on optimizing continuous parameters and often adapt mutation scales automatically. They evolve a small population and tune how much they explore as they go. S, picture gradually adjusting both candidate solutions and how wildly you mutate them to balance exploration and refinement. ES differs from simple GAs by emphasizing self-adaptation for mutation rates and being particularly effective for continuous, real-valued optimization tasks.</dd>
    </dl>


    <h2>How does it work?</h2>
    <p>Keep a population of number-based candidates, make random changes, and keep the better ones. Adjust how big the changes are so the search improves steadily.</p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Evolution_strategy">Wikipedia: Evolution strategy</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
