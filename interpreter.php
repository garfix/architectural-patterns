<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Interpreter</h1>
        <p>Virtual Machine</p>
    </header>

    <p>The interpreter processes or executes other programs.</p>

    <h2>Examples</h2>
    <ul>
        <li>Java Virtual Machine
        <li>Rule-based systems
        <li>Scripting languages, i.e. JavaScript
    </ul>

    <h2>Where does it come from?</h2>
    <p>A.f.a.i.k. the first interpreter was written for the BASIC programming language in Dartmouth College in 1964.</p>

    <h2>When should you use it?</h2>
    <p>
        <ul>
            <li>If you want the users of your application to be able to modify the behaviour of the application (scripting).
            <li>If the rules of your application need to be extended long after the application is finished.
            <li>If the Program may not directly access the Environment. The interpreter is a so called sandbox where the Program can play in without being able to do any harm.
        </ul>
    </p>

    <h2>How does it work?</h2>
    <p>One or more Programs or Scripts are loaded into the Interpreter. They may be converted into an internal representation that can be processed more effectively by the Interpreter. Connections between the Program and the Environment are created.</p>
    <p>The Interpreter reads instructions from the Program and processes them. This affects the Environment. Changes in the Environment are fed back to the Program. This cycle is executed until the Program is finished.</p>
    <p><center><img src="images/vm.jpg"></center></p>

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
        <li><a href="http://en.wikipedia.org/wiki/Interpreter_%28computing%29">Wikipedia: Interpreter (computing)<a>
    </ul>
</section>

<?php
include 'template/footer.php';
