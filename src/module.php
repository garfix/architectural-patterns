<?php
include 'template/data.php';
$pattern = $indexed['Modules'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A grouping of cohesive classes or functions, with an interface that hides the implementation.</dd>
    </dl>

    <figure><img alt="" src="images/module.drawio.png"><figcaption>Module architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Each module has a very specific function. All functionality that has cyclical dependencies should be grouped into a single module. A module is small, typically a single fine. One module may access another module through its interface, and can not access its implementation.
    </p>

    <h2>When should you use it?</h2>
    <p>
        This is a common way to split a large code base into manageable parts.
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Each module has its own file or directory
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Modular_programming">Wikipedia on modular design</a>
    </ul>
</section>

<?php
include 'template/footer.php';
