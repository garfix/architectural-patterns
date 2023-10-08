<?php
$title = "Blackboard";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Blackboard</h1>
    </header>
    <dl>
        <dt>Definition</dt>
        <dd>Top-down and bottom-up processes codepend on each other to provide data. Therefore, they share a common data repository (blackboard). A scheduler is used to prioritize the claims to the blackboard.</dd>
    </dl>
    <p>
        The problem domain for this pattern has multiple modules working together, each working on its own part of the solution. The modules work concurrently and the output of one module serves as the input for another module. Each module is dependent on one or more other modules to deliver part of the solution and the modules can't operate sequentially, it's both top-down and bottom-up.
    </P>
    <p>
        The blackboard metaphore is from a classroom situation. The teacher is solving a problem together with her students. She asks them for input. Multiple students raise their hand and one is picked by the teacher. The student approaches the blackboard and writes down some information that helps to advance the solution a bit. Then the next one is called. The students are <em>knowledge sources</em>. The teacher is the <em>scheduler</em>.
    </p>

    <figure><img src="images/blackboard_1.jpg"><figcaption>Blackboard architecture diagram</figcaption></figure>

    <p>
        The <b>Blackboard</b> is the common datastructure of the Knowledge Sources. The blackboard is able to represent
        all states of some problem space.
        The blackboard contains several <b>levels</b> of description with respect to the problem space. These levels may have several
        relationships with each other, like <i>is-part-of</i>. Levels are parts of the same datastructure. If separate datastructures
        are needed, the blackboard is divided into <b>panels</b>. Each panel in turn may contain several levels.
    </p>

    <figure><img src="images/blackboard_3.jpg"><figcaption>Blackboard panels</figcaption></figure>
    <p>
        The <b>Knowledge Source</b> is a component that adds to the solution of the problem. It may be anything that reads from
        some level of the blackboard and suggests some change to parts of the blackboard. Its most common form is the production rule.
        Knowledge Sources are completely unconnected to other Knowledge Sources.
    </p>
    <p>
        The <b>Scheduler</b> determines which Knowledge Source gets the chance to change the blackboard. Every execution cycle, it notices changes
        to the blackboard, activates the appropriate Knowledge Sources, selects one of these and executes it.
    </p>

    <h2>How does it work?</h2>
    <p>
        Running the program having this architecture, entails continually executing the execution cycle (control, cycle).
        These are the steps that are continuously executed during the cycle:
    </p>

    <figure><img src="images/blackboard_2.jpg"><figcaption>Blackboard data flow</figcaption></figure>
    <ol>
        <li>The preconditions of all Knowledge Sources are checked.
                    <li>The Knowledge Sources that match are added to
                some datastructure in the Scheduler. They are added to the once that are left from the last cycle.
                <li>The Scheduler determines which of the Knowledge Sources is chosen for activation.
                The chosen Knowledge Source is activated and its actions are executed. This results in changes in the blackboard.
    </ol>
    <p>
        A remark: when the Scheduler selects a Knowledge Source, it may have been in the datastructure
        for many cycles. In the meanwhile the blackboard has changed. So the preconditions need to be checked to be sure
        they are still valid.
    </p>

    <h2>Examples</h2>

    <p>
        A common example of this pattern is in speech recognition. Separate threads can process different parts of the sound sample, updating the blackboard with words that have been recognized. Then another process can pick up these words and perform grammar and sentence formation. Meanwhile more words and meanings are coming in, and eventually even higher level processes can pick up the formed sentences and various alternative guesses and begin to formulate it's meaning, then further intelligence systems can start to choose the most appropriate answer. All these systems have access to the blackboard and work together through it's central platform. <a href="#links">[2]</a>
    </p>

    <ul>
        <li>Hearsay-II, a speech recognition program. Speech can be recognized at several levels. For each of these levels production rules exist.
        <li>The <a href="https://en.wikipedia.org/wiki/Global_workspace_theory">Global Workspace Theory</a> of human consciousness
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
    <ul>
        <li>The problem space should be factorable into separate parts.
        <li>The problem requires different forms of approaching the problem, like bottom-up and top-down reasoning.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>It seems to me the main idea behind this architecture is to allow for complicated control structures in choosing
                    which rules to fire. However, it remains unclear to me what kind of heuristics to apply in this selection.
                    Most importantly, if we just select the first Knowledge Source in the queue, there is no need for this complex architecture.
                    Unless you have a fairly good idea about these selection criteria, the architecture may be overkill.
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Blackboard_(design_pattern)">Wikipedia</a>
        <li><a href="https://social.technet.microsoft.com/wiki/contents/articles/13215.blackboard-design-pattern.aspx">Microsoft TechNet</a>
    </ol>
</section>

<?php
include 'template/footer.php';
