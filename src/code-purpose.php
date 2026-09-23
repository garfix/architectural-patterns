<?php
$title = "Code purpose";
include 'template/data.php';
include 'template/header.php';

// Find the page data
$pageData = null;
foreach ($pages as $p) {
    if ($p['code'] === 'code-purpose') {
        $pageData = $p;
        break;
    }
}

if ($pageData) {
    // Introduction section
?>
<section>
    <header class="content">
        <h1><?= $pageData['title'] ?></h1>
    </header>

    <p>
        <b>Code purpose</b> is about <i>what</i> code does in a software system — its function,
        its role, the job it performs. This is different from <a href="code-structure">code structure</a>,
        which is about <i>how</i> code is organized.
    </p>

    <p>
        When building software, thinking in terms of purpose helps you identify the right
        architectural patterns. Whether you need to handle business logic, store and retrieve data,
        manage user interaction, enforce security, or ensure the system can evolve over time,
        understanding the purpose of different code leads to better architecture decisions.
    </p>

    <p>
        The categories below group architectural patterns by their purpose. In a simple project,
        different types of code might all live in the same files and functions. As projects grow,
        separating these concerns into distinct layers, modules, or services becomes crucial
        for maintainability, testability, and scalability.
    </p>
</section>
<?php
}

include 'template/footer.php';
