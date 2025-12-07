<?php
include 'template/data.php';
$pattern = $indexed['Data Warehouse'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd> Data warehouses are central repositories of integrated data from one or more disparate sources. They store current and historical data in one single place that are used for creating analytical reports for workers throughout the enterprise.</dd>
    </dl>

    <figure><img alt="" src="images/data-warehouse.drawio.png"><figcaption>Data Warehouse architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        <b>ETL</b> is used to integrate <b>data sources</b> into the data warehouse. From there, the data is moved to specialized databases.

        A <b>data mart</b> is a simple form of a data warehouse that is focused on a single subject (or functional area), hence they draw data from a limited number of sources such as sales, finance or marketing.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Business Intelligence (BI)
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>If you need a single common data model for all data of interest regardless of the data's source
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Data_warehouse">Wikipedia on data warehouse<a>
    </ul>
</section>

<?php
include 'template/footer.php';
