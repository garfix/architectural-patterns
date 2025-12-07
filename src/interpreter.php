<?php
include 'template/data.php';
$pattern = $indexed['Interpreter'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The interpreter serves to execute a program in a domain-specific language. It parses the source code into a format that can be executed, then executes it.</dd>
    </dl>

    <figure><img alt="" src="images/interpreter.drawio.png"><figcaption>Interpreter architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        One or more Programs or Scripts are loaded into the Interpreter. They may be converted into an internal representation that can be processed more effectively by the Interpreter. Connections between the Program and the Environment are created.
    </p>
    <p>
        The Interpreter reads instructions from the Program and processes them. This affects the environment and the call stack. This cycle is executed until the Program is finished.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Java Virtual Machine
        <li>Rule-based systems
        <li>Scripting languages, i.e. JavaScript
    </ul>

    <h2>When should you use it?</h2>
    <p>
        <ul>
            <li>If you want the users of your application to be able to modify the behaviour of the application (scripting).
            <li>If the rules of your application need to be extended long after the application is finished.
            <li>If the Program may not directly access the Environment. The interpreter is a so called sandbox where the Program can play in without being able to do any harm.
        </ul>
    </p>

    <h2>Problems</h2>
    <p>
        <ul>
            <li>Is slower than direct execution
            <li>Requires a custom made debugger
            <li>Requires the development and implementation of a feature-rich programming language
        </ul>
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>The interpreter should not run in a separate thread from the environment, because it would create endless synchronisation issues. Emulate parallel processing in stead. Process only a few Program instructions every cycle.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="http://en.wikipedia.org/wiki/Interpreter_%28computing%29">Wikipedia: Interpreter<a>
    </ul>
</section>

<?php
include 'template/footer.php';
