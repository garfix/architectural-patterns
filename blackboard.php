<?php
include 'template/header.php';
?>

<section>
    <header class="main">
        <h1>Blackboard</h1>
    </header>
    <p>
                    Picture a number of students are all writing on a blackboard at the same time, trying to solve a problem.
                    You think they will? What if we add a teacher who first asks each student what he wants to write on
                    the blackboard and decides which student has the best idea. And when the student is finished, the process is repeated.
                    This is the idea behind the blackboard architecture. The students are called Knowledge Sources. The teacher is
                    called the Scheduler.
    </p>
    <p><center><img src="images/blackboard_1.jpg"></center></p>
            <p>
                    The <b>Blackboard</b> is the common datastructure of the Knowledge Sources. The blackboard is able to represent
                    all states of some problem space.
                    The blackboard contains several <b>levels</b> of description with respect to the problem space. These levels may have several
                    relationships with each other, like <i>is-part-of</i>. Levels are parts of the same datastructure. If separate datastructures
                    are needed, the blackboard is divided into <b>panels</b>. Each panel in turn may contain several levels.
            </p>
    <p><center><img src="images/blackboard_3.jpg"></center></p>
            <p>
                    The <b>Knowledge Source</b> is a component that adds to the solution of the problem. It may be anything that reads from
                    some level of the blackboard and suggests some change to parts of the blackboard. Its most common form is the production rule.
                    Knowledge Sources are completely unconnected to other Knowledge Sources.
            </p>
            <p>
                    The <b>Scheduler</b> determines which Knowledge Source gets the chance to change the blackboard. Every execution cycle, it notices changes
                    to the blackboard, activates the appropriate Knowledge Sources, selects one of these and executes it.
            </p>

    <p>The blackboard is a specialisation of the <a href="repository.php">Repository</a> architecture.</p>

    <h2>Examples</h2>
    <ul>
        <li>Hearsay-II, a speech recognition program. Speech can be recognized at several levels. For each of these levels
                    production rules exist.
    </ul>

    <h2>Where does it come from?</h2>
    <p>
                The blackboard is developed in the early 1970's for Hearsay-II. Its purpose was to interpret spoken sentences,
                in order to query a database. The speech signal was interpreted in several levels ranging from acoustic
                signal parameters to complete sentences.
    </p>
            <p>
                    The architecture is an extension of the Production System. In Production Systems there is also a common data structure,
                    called <b>working memory</b>. It contains <b>production rules</b>, rules that execute any number of actions, when
                    their preconditions are fulfilled. These rules fire directly. The blackboard architecture adds a controller to this system
                    and allows for more flexible ways to change the common datastructure.
            </p>

    <h2>When should you use it?</h2>
    <p>
    <ul>
        <li>The problem space should be factorable into separate parts.
                    <li>The problem requires different forms of approaching the problem, like bottom-up and top-down reasoning.
    </ul>
    </p>

    <h2>How does it work?</h2>
    <p>
                    Running the program having this architecture, entails continually executing the execution cycle (control, cycle).
                    These are the steps that are continuously executed during the cycle:
            </p>
    <p><center><img src="images/blackboard_2.jpg"></center></p>
            <p>
        <ol>
            <li>The preconditions of all Knowledge Sources are checked.
                        <li>The Knowledge Sources that match are added to
                    some datastructure in the Scheduler. They are added to the once that are left from the last cycle.
                    <li>The Scheduler determines which of the Knowledge Sources is chosen for activation.
                    The chosen Knowledge Source is activated and its actions are executed. This results in changes in the blackboard.
        </ol>
                We must add some remarks here: when the Scheduler selects a Knowledge Source, it may have been in the datastructure
                for many cycles. In the meanwhile the blackboard has changed. So the preconditions need to be checked to be sure
                they are still valid.
    </p>

    <h2>Problems</h2>
    <p>
    <ul>
        <li>It seems to me the main idea behind this architecture is to allow for complicated control structures in choosing
                    which rules to fire. However, it remains unclear to me what kind of heuristics to apply in this selection.
                    Most importantly, if we just select the first Knowledge Source in the queue, there is no need for this complex architecture.
                    Unless you have a fairly good idea about these selection criteria, the architecture may be overkill.
    </ul>
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>The blackboard units are commonly some kind of atomic propositions whose value can easily be changed.
                    <li>Production rules are not hard coded in C++ if-then rules or something. They are coded as datastructures.
                    You want to pass a pointer to these to the Scheduler, which needs to recheck its preconditions and to execute its action part.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="http://gicl.mcs.drexel.edu/people/regli/Classes/KBA/Readings/KSL-98-03-BB.pdf">An Introduction to Blackboard-Style Systems Organization</a>
        <li><a href="http://www.jaydeetechnology.co.uk/expertsystems/BA8.pdf">Blackboard Architectures</a>
    </ul>
</section>

<?php
include 'template/footer.php';
