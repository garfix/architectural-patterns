<?php
include 'template/data.php';
$pattern = $indexed['Software Framework'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A platform for developing applications. It has a kernel with reusable tools and an extendible set of modules (applications).</dd>
    </dl>

    <figure><img alt="" src="images/framework.drawio.png"><figcaption>Software Framework</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A platform contains a large set of commonly used tools to create an application. The applications depend on the framwork, and are called modules or bundles. These modules are different from the basic constructs of modular programming and contain the complete user interface, controllers, routing and database model neccesary for the application.
    </p>

    <h2>Examples o frameworks</h2>
    <ul>
        <li>PHP Web frameworks like Zend, Symfony
    </ul>


    <h2>Examples of modules</h2>
    <ul>
        <li>Relation management module
        <li>Order management module
        <li>Document management module
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>A framework provides much of the tools needed to build an application, so it can speed up the start-up process.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>The framework takes some time to learn
        <li>The framework may cause overhead in performance because it executes code that is not necessary for your application
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Software_framework">Wikipedia on Software Framework<a>
    </ul>
</section>

<?php
include 'template/footer.php';
