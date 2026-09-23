<?php
$title = "Code structure";
include 'template/data.php';
include 'template/header.php';

// Find the page data
$pageData = null;
foreach ($pages as $p) {
    if ($p['code'] === 'code-structure') {
        $pageData = $p;
        break;
    }
}

if ($pageData) {
?>
<section>
    <header class="content">
        <h1><?= $pageData['title'] ?></h1>
    </header>

    <p>
        <b>Code structure</b> is about <i>how</i> code is organized in a software system — its architecture,
        its layout, the way components are arranged and connected. This is different from <a href="code-purpose">code purpose</a>,
        which is about <i>what</i> code does.
    </p>

    <p>
        When building software, thinking in terms of structure helps you design systems that are easy to
        understand, maintain, and extend. Whether you're organizing code into layers, separating concerns
        into modules, or defining clear interfaces between components, a good structure makes the system
        more robust and easier to work with.
    </p>

    <p>
        The categories below group architectural patterns by their role in code structure. In a simple
        project, different structural concerns might all be mixed together. As projects grow, separating
        these concerns into distinct layers, modules, or services becomes crucial for maintainability,
        testability, and scalability.
    </p>
</section>
<?php
}

include 'template/footer.php';

