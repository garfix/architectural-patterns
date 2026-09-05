<?php
include 'template/data.php';
$pattern = $indexed['Graphical User Interface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An interface that presents the user with graphical components, such as windows, menus, icons, and buttons, that can be operated with a pointing device such as a mouse.</dd>
    </dl>
    <?php showImage($pattern) ?>
<h2>How does it work?</h2>
    <p>
        A graphical user interface (GUI) builds the application interface out of graphical elements, called <b>widgets</b>, instead of text commands. Windows, buttons, text fields, menubars, toolbars, lists, and tree views each define the space the user can interact with and how the application responds.
    </p>
    <p>
        A GUI is usually event-driven: the operating system, a browser, or another host environment detects user input (mouse clicks, keyboard presses) and routes these as <b>events</b> to the widget the user interacted with. This widget then triggers the associated behavior of the application, which in turn updates the interface.
    </p>
    <p>
        In desktop applications the components are often provided by a widget toolkit, while in web applications they come from the HTML, CSS, and JavaScript of the browser environment.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When the intended users are not comfortable with or aware of command line interfaces.
        <li>When the interaction benefits from visuals, such as selecting an item, dragging, drawing, or seeing a preview.
        <li>When the application should be usable by a broad audience with little or no training.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Graphical_user_interface">Wikipedia on graphical user interface</a>
    </ul>
</section>

<?php
include 'template/footer.php';