<?php
include 'template/data.php';
$pattern = $indexed['Document-View'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A single class provides both model and controller logic, and model logic is separated</dd>
    </dl>

    <figure><img alt="" src="images/document-view.drawio.png"><figcaption>Caching architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        This pattern is an elaboration of Smart-UI where the model (document) has been placed in a separate class.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Simple GUI applications
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When maintenance of the application is not a factor of importance, because its stays small, but you want to perform tests on domain logic.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://stefanoborini.com/book-modelviewcontroller/01-basics-of-mvc/02-document-view.html">Stefano Borini on Document-View<a>
    </ul>
</section>

<?php
include 'template/footer.php';
