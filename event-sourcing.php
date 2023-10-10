<?php
include 'template/data.php';
$pattern = $indexed['Event Sourcing'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>In stead of storing the current state of the data, all operations (events) that have occurred on the data are stored.</dd>
    </dl>

    <figure><img src="images/event-sourcing-1.png"><figcaption>Event-sourcing architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Every action performed by the system is modelled as an event and written to an event store (event log).
        This store only changes by this adding of events. Events are not removed or modified after they're added.
        Event takes the form of a diff (difference) (no: set account balance to 110 euro; yes: increase account balance with 10 euro).
    </p>
    <p>
        Since a log of events itself does not make a state, and users need state to interact with a system, the system needs to build a current state from the event log. In the simplest case, a single state is updated each time a new event is added.
        In a more elaborate case, the system has many views on the same event log, and these are updated asynchronously (as is the case in <a href='cqrs.html'>CQRS</a>).
    </p>
    <p>
        The system may have the ability to tag some event. If so, the system provides lists of tags and the user may be able to revert the system to the state labeled with this tag.
    </p>

    <p>This picture shows the events in the event source. The red flag is the tag that points to the current event. The state of the system reflects all the events up to this point.</p>

    <figure><img src="images/event-sourcing-2.png"><figcaption>Even-sourcing branches</figcaption></figure>

    <p>In the second picture a branch has been created starting with event #2. The client that uses the system is working on this branch and has created some events #4, #5, and #6 that exist parallel to the main branch. The state of this client reflects all events up to event #5. At some later state these branches may need to be merged into one again.</p>

    <h2>Examples</h2>
    <ul>
        <li>Version control systems (source code)
        <li>Word processor (for undo / redo)
        <li>Database transaction logs (for master/slave synchronization, a.o.)
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        <li>Altough the concept itself is much older, the current ideas about architecture originate from about 2006 and come from Greg Young.
    </p>

    <h2>When should you use it?</h2>
    <p>
        Event sourcing is used when the events that lead to the current state of the data are just as important as the current state itself is.
    </p>
    <p>
        <li>If logging or auditing is (very) important
        <li>If you want to be able to backtrack to a previous state, or work with different states in parallel.
    </p>

    <h2>Problems</h2>
    <p>
        <li>When the event log has become corrupted, it must be restored with extra "restore" events. The event log should not be modified.
        <li>When the event source consists of multiple branches, these will need to be mergable. Merging branches may cause conflicts that are impossible to resolve automatically.
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>The event log may be implemented in various ways. If events need to be queried, an index may be needed.
        <li>As a notable exceptional case, the version control system Git does not store diffs, it stores all past states of the data (in a highly compressed manner). Diffs are calculated from the states.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="http://martinfowler.com/eaaDev/EventSourcing.html">Martin Fowler on Event sourcing</a>
        <li><a href="https://www.youtube.com/watch?v=JHGkaShoyNs">Greg Young on Event sourcing and CQRS</a>
    </ul>
</section>

<?php
include 'template/footer.php';
