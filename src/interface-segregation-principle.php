<?php
include 'template/data.php';
$pattern = $indexed['Interface Segregation Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Make interfaces as specific as needed by the task.</dd>
    </dl>

    <figure><img src="images/interface-segregation.drawio.png"><figcaption>Interface Segregation Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Creating interfaces with a large number of methods is easy, because one size fits all. But it creates many unnecessary dependencies which cause a small change to have large scale effects. In stead, reduce large interfaces into multiple smaller interfaces, tailored to the job at hand.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>It helps to build a maintainable system.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Interface_segregation_principle">Wikipedia on Interface Segregation Principle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
