<?php
include 'template/data.php';
$pattern = $indexed['Stable Abstractions Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A component should be as abstract as it is stable</dd>
    </dl>

    <figure><img src="images/stable-abstractions-principle.drawio.png"><figcaption>Stable Abstractions Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The Stable Dependencies Principle says that the top-level components should be stable (will not change often). To make these components flexible enough to change, they can be made abstract.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://wiki.c2.com/?StableAbstractionsPrinciple">C2 on Stable Abstractions Principle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
