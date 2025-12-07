<?php
include 'template/data.php';
$pattern = $indexed['Liskov Substitution Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Any subtype S of T must be designed in a way that it can be used predictably in any function that expects T.</dd>
    </dl>

    <figure><img alt="" src="images/lsp.drawio.png"><figcaption>Liskov Substitution Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        With OOP's polymorphism, a function that accepts an object of class T allows objects of it T's subclass S as well. The same goes for interfaces. This is the syntactic part of the story. Liskov Substitution Principle then holds that the same must hold for the semantic aspect. A program's behavior remains consistent and predictable when objects of derived classes are used in place of objects of the base class.
    </p>

    <h2>Example</h2>
    <p>
        The picture above is an example of a violation of LSP. Square is a subclass of Rectangle, but when an object of class Square is used in a function that expects a Rectangle, the object doesn't behave like the programmer expected. After they set the width and the height of the rectangle, they expect the area to be the product of the width and the height. But when they ask for it, the square returns a different number: Square ignores the fields width and height, and adds a field area, that is updated when either setWidth or setHeight is called.
    </p>

    <h2>When should you use it?</h2>
    <p>
        When you have subclasses or derived interfaces.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Liskov_substitution_principle">Wikipedia on Liskov Substitution Principle</a>
    </ul>
</section>

<?php
include 'template/footer.php';
