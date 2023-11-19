<?php
include 'template/data.php';
$pattern = $indexed['Component'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An application with a single function. For complex functionality, combine components.</dd>
    </dl>

    <figure><img src="images/component.drawio.png"><figcaption>Component architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Each application has a single function.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Component Object Model (COM)
        <li>Enterprise JavaBeans
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
