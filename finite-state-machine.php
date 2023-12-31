<?php
include 'template/data.php';
$pattern = $indexed['Finite State Machine'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The application can only be in one of a fixed set of states. Transitions between states are defined explicitly.</dd>
    </dl>

    <p>
        The <b>State</b> defines the way the system acts at a certain time.
    </p>
    <p>
        The <b>State Transition</b> defines when the system may change from one state into the next and what
        immediate actions are taken at the time of the transition. A state transition must be defined for
        every allowable transition between any two states.
    </p>

    <figure><img src="images/fsm_1.jpg"><figcaption>A Finite State Machine example</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A finite state machine is an application in itself, but it is executed by an execution engine, which is also an application. So we need to explain the working on two levels.
    </p>
    <p>
        Let's start with the fsm itself. The state machine starts in some initial state. Every execution cycle or control cycle the following two
        steps are executed:
        <ol>
            <li>The <b>state-specific code</b> of the current state is executed.
            <li>For every state transition starting from this state, the conditions are checked.
            If all conditions match, the system changes to the new state.
        </ol>
        When the system changes state, three types of code may be executed (in this order):
        <ol>
            <li><b>Exit code</b>, code belonging to the state that is exited.
            <li><b>Transition code</b>, code that belongs to a specific transition.
            <li><b>Enter code</b>, code that belongs to the state that is entered.
        </ol>
    </p>

    <p>
        Next, the FSM execution engine. The central component is a processor that's just idle, until it is triggered by some outside event, like a timer. When that happens, it looks at the current state and checks if the trigger causes a transition. If so, the new state becomes active and the new state's code is executed. This code may trigger an immediate state change.

    <figure><img src="images/fsm.drawio.png"><figcaption>Finite State Machine architecture diagram</figcaption></figure>

    <p>
        Remarks:
        <ul>
            <li>If multiple transitions are possible in a single cycle, only one (the first encountered) should be chosen.
            <li>The <i>transition code</i>, <i>enter code</i>, and <i>exit code</i>,
            should be very short pieces of code. They should
            be executed in the same execution cycle. It may not be possible that this code takes so long that
            the state machine changes to a different state while this code is executed. If it does, a new state
            should be created for it.
        </ul>
    </p>

    <p>
        In a <b>hierarchical state machine</b> a state B may itself be described by an entire state machine.
        A hierarchical state machine allows for three kinds of state transitions not found in simple
        state machines:
        <ol>
            <li>Entering a state machine.<br>
            E.g. <b>State A -> State B1</b>.<br>State B has become the active state
            in the outer state machine. If a state machine becomes active, it automatically places itself
            in its initial state, which is B1 in this picture.
            The exit code of A is executed,
            followed by the transition code of the transition A->B,
            followed by the enter code of B,
            followed by the enter code of B1.
            <li>The outer state machine leaves the state containing the inner state machine.<br>
            E.g. <b>State B -> State C</b>.<br>
            The conditions for the transition B->C match, so the outer state machine changes state. Any state
            the inner state machine might have had is lost.
            The exit code of the inner state is executed,
            followed by the exit code of B,
            followed by the transition code of the transition B->C,
            followed by the enter code of C.
            <li>The inner state machine's state changes to the outer state machine's state.<br>
            E.g. <b>State B5 -> State D</b>.<br>
            The conditions for the transition B5->C match, so state B is left and state C is entered.
            The exit code of B5 is executed,
            followed by the exit code of B,
            followed by the transition code of the transition B->D,
            followed by the enter code of D.
        </ol>
    </p>

    <figure><img src="images/fsm_2.jpg"><figcaption>Hierarchical Finite State Machine diagram</figcaption></figure>

    <p>
        It is even possible to have more than one Finite State Machine in a single state. These all become
        active whenever the super state becomes active. This creates the problem of what should happen when
        a state transition of an inner state to a new outer state becomes possible.
        The outer state is only really left (execution of transition code) when all inner state machines
        can transfer into the same outer state in the same cycle.
    </p>
    <p>
        Special state transitions:
        <ul>
            <li>Conditionless transitions. A conditionless transition is always performed immediately.
            In the previous picture the transition B5->D would likely be conditionless. It is the endstate
            of the inner state machine, so there's no use remaining in this state.
            <li>Timeouts. A transition may occur after some predefined time has elapsed.
        </ul>
    </p>
    <p>
        Your system may also have a number of Finite State Machines, each used for a different job.
        It is entirely possible that transition code of one FSM sends an event to another FSM,
        which changes its state.
    </p>
    <p>
        Advanced state machines may keep track of how much time was spent in each state, if a state is entered
        for the first time, log changes for debugging, etc.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>A coffee machine is the archetypal state machine.
        <li>Games.
    </ul>

    <h2>When should you use it?</h2>
    <p>
        Use a Finite State Machine architecture when your system should not perform the same behaviour all the time,
        and there are a finite number of states the system can be in.
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>The identifier of the state can be an enumeration type or the name of the state.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.m.wikipedia.org/wiki/Finite-state_machine">Wikipedia</a>
    </ul>
</section>

<?php
include 'template/footer.php';
