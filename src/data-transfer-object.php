<?php
include 'template/data.php';
$pattern = $indexed['Data Transfer Object'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An object that carries data between processes</dd>
    </dl>

    <figure><img src="images/data-transfer-object.drawio.png"><figcaption>Data Transfer Object</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The purpose of such an object is to facilitate data transfer. To this end it contains serialization/deserialization methods (for JSON/XML) and nothing else. Its attributes are typically scalar and easy to serialize.
    </p>
    <p>
        A DTO is neither an entity nor a value object, though it often contains the data of the entity and is immutable like a value object. The difference is that the data of the DTO is specially prepared for data transfer. The data is simple and the class contains no behaviour.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When transporting objects over a network.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>A DTO is an extra class and it only pays out to create a special DTO for an entity if the entity is too complicated to (de)serialize.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Data_transfer_object">Wikipedia on Data transfer object<a>
        <li><a href="https://martinfowler.com/eaaCatalog/dataTransferObject.html">Martin Fowler on Data transfer object<a>
    </ul>
</section>

<?php
include 'template/footer.php';
