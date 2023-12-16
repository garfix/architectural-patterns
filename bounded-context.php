<?php
include 'template/data.php';
$pattern = $indexed['Bounded Context'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Keep the naming of one area of the system separate from that of the other areas.</dd>
    </dl>

    <figure><img src="images/boundaries.drawio.png"><figcaption>Bounded Context</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A system may consist of multiple areas (bounded contexts) that each have their own naming conventions (ubiquitous language). If this is the case then the names of one context should not be used in the other context. In stead a name should be mapped to another map when the data crosses the context boundary.
    </p>

    <figure><img src="images/bounded-context-fowler.png"><figcaption>Bounded Context example</figcaption></figure>

    <h2>When should you use it?</h2>
    <ul>
        <li>In a large-scale project with multiple teams, each with their own names and concepts
        <li>When using a software library that may one day be replaced by another one
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Data crossing a boundary is not a business entity but just a plain data object
        <li>If class C1 from context C wants to talk to class D1 from context D, the system should provide an interface DI1. C1 then talks to DI1 and D1 implements DI1.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Creating a boundary brings a significant amount of work.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/bliki/BoundedContext.html">Martin Fowler on Bounded Context<a>
    </ul>
</section>

<?php
include 'template/footer.php';
