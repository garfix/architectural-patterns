<?php
include 'template/data.php';
$pattern = $indexed['Data Synchronization'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An automated process that ensures that the data in store A is made equal to that in store B.</dd>
    </dl>

    <figure><img alt="" src="images/data-synchronization.drawio.png"><figcaption>Data Synchronization</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Data is stored in multiple copies, either in a multiple databases or in multiple file systems. There are a number of variations to the process.
    </p>
    <ul>
        <li>All data of store A may need to be synchronized with store B, or just part of the data.
        <li>The data may need to be transformed from A's format to B's format.
        <li>The syncronization may be one-way (only A to B) or two way (B to A as well).
        <li>The synchronizer copies all data to be synced every time, or it calculates the difference between the stores and syncs only this difference.
        <li>The synchronization may happen periodically or based on a trigger caused by a change in the data.
        <li>There may be a <b>single source of truth</b> that is the main authority, or there are equal peers
        <li>If multiple sources of events need to be synchronized the use of clocks may be necessary to ensure that the events are integrated in the correct order.
    </ul>
    <p>
        If the data consists of files that are copied as single units, and the sync is two-way (or has multiple sources) it may be necessary to calculate the differences between files and to merge these differences.
    </p>
    <p>If data in store A is different from that in B the stores are <b>inconsistent</b>. It is the job of data synchronization to ensure consistency. A special type of consistency is <b>eventual consistency</b>.

    <h2>Examples</h2>
    <ul>
        <li>Data base replication
        <li>Version control systems
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>For performance reasons
        <li>When working remotely or off-line
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>If multiple users change the same piece of data, these changes collide and this collision may need to be resolved, even manually.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Data_synchronization">Wikipedia<a>
        <li><a href="https://en.wikipedia.org/wiki/Eventual_consistency">Eventual consistency<a>
    </ul>
</section>

<?php
include 'template/footer.php';
