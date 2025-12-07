<?php
include 'template/data.php';
$pattern = $indexed['Template Engine'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Software designed to generate a concrete user interface from an abstract template. The template contains the components of the ui and has placeholders for the data</dd>
    </dl>

    <figure><img alt="" src="images/template-engine.drawio.png"><figcaption>Template Engine</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A template engine allows you to create a user interface free of presentation logic. All code needed to prepare the <b>data</b> that is to be shown is prepared separately. The <b>template</b> contains a declarative represention of the UI elements (for example: HTML elements), and has placeholder (for example in the form of double-curly braces <i>{{ some_data }}</i>) that will be replaced with part of the data.
    </p>
    <p>
        When producing part of the UI (HTML, PDF, and others), the template engine is called to create a <b>page</b>, given a template and the precalculated data. It returns the UI (or part of it).
    </p>
    <p>
        Template engines are often part of frameoworks, but a number of them can be used independently.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>Templates allow a designer to create the user interface without any knowledge or working implementation of the data model.
        <li>A user interface without presentation logic is easier to understand and maintain
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Template_processor">Wikipedia on template processor<a>
    </ul>
</section>

<?php
include 'template/footer.php';
