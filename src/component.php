<?php
include 'template/data.php';
$pattern = $indexed['Component'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The smallest unit of deployment, with a well-defined API.</dd>
    </dl>

    <figure><img alt="" src="images/component.drawio.png"><figcaption>Component architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A component is deployed as a separate entity. It has a documented an rigid interface that other components can rely on. For complex functionality, component are combined.
    </p>
    <p>
        Components can be used as part of a larger application, but also as complete applications by themselves.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>DLL
        <li>Component Object Model (COM)
        <li>jar files
        <li>Unix commands
    </ul>

    <h2>When should you use it?</h2>
    <p>
        When code reuse is important. When a large number of unrelated developers work on the same platform.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>There is an overhead involved in developing software as individual components.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Component-based_software_engineering">Wikipedia on component-based design</a>
    </ul>
</section>

<?php
include 'template/footer.php';
