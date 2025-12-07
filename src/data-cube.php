<?php
include 'template/data.php';
$pattern = $indexed['Data Cube'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A data cube is an index of big n-dimensional data.</dd>
    </dl>

    <figure><img alt="" src="images/data-cube.drawio.png"><figcaption>Data Cube</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        An example of 3-dimensional data is a timeseries of satellite images, that is, a series of images (2D) over time (3D) that capture a specific geographical area.<br>

        The timeseries are not stored in the data cube. The data cube merely indexes them. Via the index the user is able to find specific data quickly.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Timeseries of satelite data
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>If you need to find a bit of timeseries data and your data doesn't allow a simpler way of retrieving it
    </ul>

    <h2>Problems</h2>
    <p>
        <li>If your data is uniform and you know how to locate specific data inside it, the data cube will not make it faster
        <li>Indexing may be time-consuming
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Data_cube">Wikipedia on data cube<a>
    </ul>
</section>

<?php
include 'template/footer.php';
