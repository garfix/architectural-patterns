<?php
include 'template/data.php';
$pattern = $indexed['Space-Based'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A pool of processing units that both contain domain logic and code for a section of the application. New units can be added and removed at any time.</dd>
    </dl>

    <p>In a n-tier system, the database is the bottleneck. This pattern tries to solve this by scaling not only code linearly but the data as well.</p>

    <p>
        The pattern gets its name from the concept of <a href="https://en.wikipedia.org/wiki/Tuple_space">tuple space</a>, the technique of using multiple processes communicating through shared memory.
    </p>

    <figure><img src="images/space-based.drawio.png"><figcaption>Space based architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The application is divided in several sections. For example: customer management, product management, order management. Each of the sections has a processing unit type. Each type has a layer of virtualized middleware and a variable number of processing units. Processing units are added and removed based on the load.
    </p>
    <p>
        The virtualized middleware has
        <ul>
            <li>a <b>messaging grid</b>, which is a load balancer that distributes incoming messages over processing units
            <li>a <b>data grid</b> that holds all data for this section of the application, in memory (not a database), this is the same data as that in the data caches of the processing units
            <li>a <b>processing grid</b> that communicates between processing unit types
            <li>a <b>deployment manager</b> that manages startup and shutdown of processing units based on load
        </ul>
    </p>
    <p>
        A <b>processing unit</b> contains the logic of a section of the application. It holds a copy of the data grid. It contains a replication engine that duplicates its data to the other processing units of the same type, and to the data grid. This data replication is very fast, but not immediate. It's based on a replication frequency.
    </p>
    <p>
        Every mutation is not only replicated to the other processing units, but send as a message to the database. The database is also used to feed the first processing unit of an area.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Large cloud providers like Google and Amazon
        <li>JavaSpaces
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>This is a complex architecture that should be used only when the database is a serious bottleneck. Further, it works better with compartimentable data sets and heavy processing.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>As different processing units work on copies of the data, data collisions may occur when multiple units change the same tuple at about the same time. When replication frequency is low, the chance of data collision (and corruption) is higher.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Space-based_architecture">Wikipedia<a>
        <li><a href="https://umairsaeed.com/space-based-architecture/">Space Based Architecture</a>
    </ul>
</section>

<?php
include 'template/footer.php';
