<?php
include 'template/data.php';
$pattern = $indexed['Use case'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>
            A use case is an object that implements application-specific business rules and interacts with entities.
        </dd>
    </dl>

    <figure><img src="images/use-case.drawio.png"><figcaption>Use case</figcaption></figure>

    <h2>How does it work?</h2>
    <p>

    </p>

    <h2>Examples</h2>
    <ul>
        <li>Gather contact for a new loan, Pay invoice
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Use_case">Wikipedia on use case<a>
    </ul>
</section>

<?php
include 'template/footer.php';
