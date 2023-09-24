<?php
$title = "CQRS";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>CQRS</h1>
        <p>Command-Query Responsibility Segregation</p>
    </header>
    <p>
        This architecture is only useful if your application process huge amounts of data. Further, the views that present the data to the user are complex and cannot be generated real-time. Reading and writing information are separated into two separate models.
    </p>

    <h2>How does it work?</h2>
    <p>
        A CQRS system separates a Command Model from a Query Model. Whenever the system executes an action, an Action object is created and this is stored in the command model. A signal is then sent to the Query Model and all models that depend on this command are updated, asynchronously.
    </p>
    <p>
        Data entering the system is written only to the Command Model. When an application needs to show data, it is read from the Query model.
    </p>
    <p>
        The Query Models are "throw away" and may be recreated from the Command Model. However, it may take (considerable) time to recreate the Query Models.
    </p>

    <figure><img src="images/cqrs-1.png"><figcaption>CQRS architecture diagram</figcaption></figure>


    <h2>Examples</h2>
    <ul>
        <li>Banking. Bank account transactions are stored in one store. Bank account views are stored in a different model and updated infrequently (once a day).
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        CQRS was created by Greg Young.
    </p>

    <h2>When should you use it?</h2>
    <p>
        <li>When your data needs to be available real-time to a user and it cannot be constructed real-time by a conventional database.
        <li>When your system needs multiple views on the same data, in such a way that a single data model is ineffective.
    </p>

    <h2>Problems</h2>
    <p>
        <li>Since the Query Model is updated asynchronously, it may not represent the current state of the data. When this data is used errors occur that need to be solved later (perhaps manually).
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>CQRS is normally used in conjection with <a href='event-sourcing'>Event sourcing</a> to store its Commands.
        <li>In theory it is possible to use CQRS with just a plain database that only stores the current state as a Command Model, but this is not much different from plain caching.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="http://martinfowler.com/bliki/CQRS.html">Martin Fowler on CQRS</a>
        <li><a href="https://msdn.microsoft.com/en-us/library/dn568103.aspx">MSDN on CQRS</a>
        <li><a href="http://www.h-online.com/developer/features/CQRS-an-architecture-precept-based-on-segregation-of-commands-and-queries-1803276.html">CQRS - a new architecture precept based on segregation of commands and queries</a>
    </ul>
</section>

<?php
include 'template/footer.php';
