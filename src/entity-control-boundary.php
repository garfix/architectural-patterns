<?php
include 'template/data.php';
$pattern = $indexed['Entity-Control-Boundary'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Pure domain logic, in the form of application independent entities and application specific control objects are separated from dependencies (boundaries) with the outside world.</dd>
    </dl>

    <figure><img alt="" src="images/entity-control-boundary.drawio.png"><figcaption>Entity-Control-Boundary architecture diagram</figcaption></figure>

    <p>Note: the <i>control</i> in this pattern is different from the <i>controller</i> in MVC.

    <h2>How does it work?</h2>
    <p>
        The main idea here is to separate domain logic from the rest of the application. Domain logic, the <i>entity</i> and <i>control</i> implements the use cases of the application and does not contain any code that directly talks to the outside world (no ui code, no db code, no file system code, in short, no <i>boundary</i>). This makes the core logic of the system highly reusable in other environments. It is also clear to read and well testable.
    </p>
    <ul>
        <li>The <b>Entity</b> is a class that represents a business object (Customer, Order, PackagingItem) together with its application-independent business rules.
        <li>The <b>Control object</b> is a class that holds application-specific domain logic. It implements the use cases of the application.
        <li>The <b>Boundary object</b> is a class that contains all logic that deals with external factors, like user interfaces and databases.
    </ul>
    <p>
        Comparing this pattern with MVC, we can say that <i>entities</i> and <i>control objects</i> are the domain-logic part of the Model. The Model, however also contains database specific code and this would be part of the <i>boundary</i> of ECB. The Controller could contain logic from <i>control objects</i>, but mainly it would be part of the <i>boundary</i>. The View would fall completely in the <i>boundary</i> part.
    </p>

    <h2>Where does it come from?</h2>
    <p>
        It was described in Ivar jacobson's book "Object-oriented software engineering: a use case driven approach"
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>This is the core of modern architectures like <b>hexagonal</b> and <b>clean</b>. It seems to be essential to a large-scale application.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Separating domain logic from the rest of the application requires a serious conscious effort and may form a learning curve.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Entity-control-boundary">Wikipedia on Entity-Control-Boundary<a>
    </ul>
</section>

<?php
include 'template/footer.php';
