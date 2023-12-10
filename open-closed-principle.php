<?php
include 'template/data.php';
$pattern = $indexed['Open-Closed Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A class shouldn't use selection as a means to be open to extension.</dd>
    </dl>

    <p>
        The principle basically tells us to use polymorphism as it was intended.
    </p>
    <p>
        Selection is a term from <a href="https://en.wikipedia.org/wiki/Structured_programming">structured programming</a> that involves if/then statements, switch/case statements and such.
    </p>

    <figure><img src="images/open-closed.drawio.png"><figcaption>Open Closed Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The principle is usually described as: a software artifact should be open for extension but closed for modification. Being open for extension means that the class can be used as part of new functionality. Being closed for modification is usually interpreted as an imperative to change a class as little as possible, but this seems unnecessarily strict. A valid point however is this: if the class needs to take a new form (in the sense of polymorphism), this form shouldn't be implemented as a branch of selection (an if-statement, switch/case statement, or something). It should be implemented as a separate class. This new class can use the original class or it can inherit from it. This way the original class doesn't need to be changed whenever a new form is added, and it doesn't take on ever more different responsibilities.
    </p>

    <h2>When should you use it?</h2>
    <p>
        It helps to build a maintainable system.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://www.digitalocean.com/community/conceptual-articles/s-o-l-i-d-the-first-five-principles-of-object-oriented-design#open-closed-principle">Digital Ocean on Open Closed Principle</a>
    </ul>
</section>

<?php
include 'template/footer.php';
