<?php
include 'template/data.php';
$pattern = $indexed['Dependency Inversion Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>High-level modules should not depend on low-level modules, but both should depend on abstractions</dd>
    </dl>

    <figure><img alt="" src="images/dependency-inversion.drawio.png"><figcaption>Dependency Inversion Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The principle has two aspects:

        <ul>
            <li>High-level modules should not import anything from low-level modules. Both should depend on abstractions (e.g., interfaces).
            <li>Abstractions should not depend on details. Details (concrete implementations) should depend on abstractions.
        </ul>
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li><b>Testing and Mocking:</b> DIP facilitates unit testing and the use of mock objects. By depending on abstractions and injecting dependencies, it becomes easier to substitute real implementations with mock or test-specific implementations during unit testing.
        <li><b>Parallel Development:</b> In collaborative development environments where different teams or developers work on different components of the system independently, DIP can provide a clear separation of concerns, enabling parallel development without tight coupling.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li><b>Abstraction Overhead:</b> Introducing abstractions (interfaces or abstract classes) to implement DIP can lead to additional code and complexity, especially in smaller projects where the benefits may not outweigh the costs.
        <li><b>Over-Engineering:</b> Over-application of DIP, especially in simpler projects, can result in unnecessary abstraction layers, leading to over-engineering and increased development time and effort.
        <li><b>Increased Number of Interfaces:</b> As the number of abstractions increases, the codebase may end up with a large number of interfaces, potentially making it harder to manage and navigate.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Dependency_inversion_principle">Wikipedia on Dependency inversion principle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
