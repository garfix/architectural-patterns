<?php
include 'template/data.php';
$pattern = $indexed['Functional tests'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Code that tests the correctness of individual functions, modules, and the full system.</dd>
    </dl>

    <figure><img alt="" src="images/functional-tests.drawio.png"><figcaption>Functional tests</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
       A functional test is commonly automated (run by a test-platform). It calls a function of the system with common inputs and edge case inputs, and checks if the outputs match the outputs you'd expect.
    </p>
    <p>
        Most major programming languages provide a testing framework that helps you to set up and run tests.
    </p>

    <ul>
        <li><b>unit tests</b> tests of individual functions
        <li><b>integration tests</b> testing the cooperation of two modules
        <li><b>system tests</b> tests of the full system
    </ul>

    <h2>When should you use it?</h2>
    <p>
        A commonly heard advice is to strive for "100% code coverage", which means that each and every line of code should be "touched" by at least one test. And that tests take take time, but fixing bugs takes even more time in the end.
    </p>
    <p>
        However, testing everything has the disadvantage that writing the application takes at least twice the amount of time. A method that is more time-effective consists of assessing the risk of the failure of each function, and testing only functions with an unacceptable risk.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>Writing tests takes time in the short run and this slows down the time to ship your application
        <li>Not writing tests takes time in the long run that goes into debugging code
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Unit_testing">Wikipedia on unit tests<a>
        <li><a href="https://en.wikipedia.org/wiki/Integration_testing">Wikipedia on integration tests<a>
        <li><a href="https://en.wikipedia.org/wiki/System_testing">Wikipedia on system tests<a>
    </ul>
    </section>

<?php
include 'template/footer.php';
