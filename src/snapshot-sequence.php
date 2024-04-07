<?php
include 'template/data.php';
$pattern = $indexed['Snapshot Sequence'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An ordered list of all complete system states</dd>
    </dl>

    <figure><img src="images/snapshot.drawio.png"><figcaption>Snapshot Sequence</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Like event sourcing, this structure captures the history of a system. But rather than storing changes, snapshot sequence stores complete states. But as the state of a database or filesystem is formed by its entire contents, a naive implementation would quickly become very large. A smarter implementation creates each state as a set of hierarchical references to the underlaying data.
    </p>
    <p>
        The term "snapshot" is well-known, but the data structure of linked snapshots doesn't have a name as far as I can tell, so I just named it "Snapshot sequence" myself.
    </p>
    <p>
        It can be sufficient to only keep the previous complete state, or a few previous states.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Git stores its data as shapshots
        <li>React stores its data as a series of snapshots
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you need to access a previous state very quickly.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>It can be very hard to find an efficient implementation of a snapshot
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://react.dev/learn/state-as-a-snapshot">React: state as snapshot<a>
    </ul>
</section>

<?php
include 'template/footer.php';
