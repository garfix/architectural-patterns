<?php
include 'template/data.php';
$pattern = $indexed['Error Handling'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>When an error occurs, this is communicated to the user.</dd>
    </dl>

    <figure><img alt="" src="images/error-handling.drawio.png"><figcaption>Error handling architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        When an error occurs during the flow of the application, the action the user aims to perform, fails. If this is not fed back to the user, the user will assume it succeeded. The user can also be instructed what to do about the error.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Error messages in graphical user interfaces
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When not informing the user leads to unwanted consequences.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Users can blame themselves for errors they can't help. Try to avoid this
        <li>Error messages can be cryptic, especially to the layman
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Exception_handling">Wikipedia<a>
    </ul>
</section>

<?php
include 'template/footer.php';
