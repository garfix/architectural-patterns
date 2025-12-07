<?php
include 'template/data.php';
$pattern = $indexed['Inference Engine'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>An application that finds and executes rules to solve a problem.</dd>
    </dl>

    <figure><img alt="" src="images/rule-based.drawio.png"><figcaption>Inference engine architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A rule-based machine is an application in itself, but it is executed by an execution engine, which is also an application. So we need to explain the working on two levels.
    </p>
    <p>
        Let's start with the inference engine itself. The engine is fed a goal. It tries to find rules that match the goal. The matching rules are then executed, and this produces more goals. These are solved as well. This involves recursion. When a rule is resolved, the answer is fed back to the parent rule.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Expert systems
        <li>The programming language Prolog
    </ul>

    <h2>When should you use it?</h2>
    <p>
        The rules form a program in the <a href="https://en.wikipedia.org/wiki/Logic_programming">logic programming paradigm</a>. It is declarative and lends itself for solving problems recursively. The main reason for using this paradigm is that it allows a non-programmer to contribute to the rules of the business logic.
    </p>
    <p>
        Such a program can be transparent: the rules that are executed can be logged and show you how the answer was found. The program can also be executed step-by-step, by an end-user.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Rule-based_system">Wikipedia</a>
    </ul>
</section>

<?php
include 'template/footer.php';
