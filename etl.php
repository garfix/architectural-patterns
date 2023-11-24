<?php
include 'template/data.php';
$pattern = $indexed['ETL'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The process of combining heterogenous data sources into a homogenized data target.</dd>
    </dl>

    <figure><img src="images/etl.drawio.png"><figcaption>ETL architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Data extraction involves extracting data from homogeneous or heterogeneous sources; data transformation processes data by data cleaning and transforming it into a proper storage format/structure for the purposes of querying and analysis; finally, data loading describes the insertion of data into the final target database such as an operational data store, a data mart, data lake or a data warehouse.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you have many data sources, each with its own way of interaction, and you want to handle it in a uniform manner.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Extract,_transform,_load">Wikipedia on ETL<a>
    </ul>
</section>

<?php
include 'template/footer.php';
