<?php
include 'template/data.php';
$pattern = $indexed['N-Tier'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A tiered architecture cleanly separates its main concerns. Each tier only communicates with the tier before and the tier after it.</dd>
    </dl>
    <p>
        Each tier may live on a separate server, or two or more tiers may be combined on the same server. It's the separation of concerns that matters.
    </p>

    <figure><img src="images/n-tier.drawio.png"><figcaption>N-tier architecture diagram</figcaption></figure>

    <p>
        I will explain the 4-tier architecture here. There may be less or more.
    </p>
    <p>
        The <b>presentation tier</b> deals with the interaction with the user. It shows the user interface and allows the user to interact with it via controls.
    </p>
    <p>
        The <b>controller tier</b> or <b>application tier</b> contains all the code required to run an application, but distinct from the domain model.
    </p>
    <p>
        The <b>domain logic tier</b> contains the code that expresses the requirements of the domain, or business. This information is typically extracted from domain experts.
    </p>
    <p>
        The <b>data access tier</b> stores and retrieves data from the database. It contains CRUD functions (Create Read Update Delete), as well as complicated queries joining multiple tables.
    </p>

    <h2>How does it work?</h2>
    <p>
        Communication between the different tiers often takes place via a network.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Web-applications
    </ul>

    <h2>When should you use it?</h2>
    <p>
        Every large scale application needs to separate these concerns. A specialized team may work on a single tier. Even on small applications this pattern helps to reduce cognitive load (makes it easier to understand).
    </p>
    <p>
        Advantages of a separate the presentation tier
    </p>
    <ul>
        <li>It is possible to have a frontend team just work on the visual design, without having to code
        <li>It is possible to add another view (presentation) in the same application
        <li>It is possible to replace the presentation
        <li>It is possible to test the application without access to the presentation
    </ul>
    <p>
        Advantages of a separate domain logic tier
    </p>
    <ul>
        <li>Isolating the domain rules to review them with the domain experts
        <li>Preventing code-duplication, which makes maintenance easier
        <li>Unit tests that are don't need a database are faster and easier to create
    </ul>
    <p>
        Advantages of a separate data access tier
    </p>
    <ul>
        <li>A separate data access tier can focus on speed
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Multitier_architecture">Wikipedia on Multitier</a>
    </ul>
</section>

<?php
include 'template/footer.php';
