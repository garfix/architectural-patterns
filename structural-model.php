<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Structural model</h1>
    </header>
    <p>This pattern's name is somewhat inexpressive. The group that created this software pattern must have assumed that their model was <i>the</i> way to structure software. A better name, I think, would be something like <i>Synchronizer</i>, since that is its main function.
    </p>

    <h2>How does it work?</h2>
    <p>The core of the pattern is a control loop that runs at fixed periods of time, called <i>time intervals</i> or <i>time frames</i>.
    </p>
    <p>The pattern contains an application specific part, called <i>Application Level</i> and a generic part, called <i>Executive Level</i>.
    <p><center><img src="images/structural_model_1.jpg"></center><br><b><font face="comic sans ms" size="-1">Picture: Structrural Model</font></b></p>
    <p>A <b>component</b> models, implements, or simulates a low-level part of the system. In a flight simulator it can be a pump, a valve or a switch. Small parts. These components can be updated periodically or be modified by handling events. The component may not communicate directly with other components.</p>
    <p>A <b>subsystem controller</b> is a cohesive, meaningful collection of components. Subsystem controllers can be updated periodically or be modified by handling events. An example in the domain of flight simulators: a hydrolics system. Subsystem controllers <i>may</i> communicate with other subsystem controllers via <i>export areas</i>.</p>
    <p>An <b>export area</b> is a shared data repository. It has a single subsystem as an owner/writer and may have many subsystems as readers.</p>
    <p>The <b>event handler</b> passes all events to the addressed subsystems.</p>
    <p>The <b>periodic sequencer</b> updates all subsystem controllers at rates that can be defined per subsystem.It also synchonizes the exchange of data via the export areas.</p>
    <p>The <b>timeline synchonizer</b> synchronizes the cyclic frames that form the time unit of simulation. It initiates the synchronized exchange of data between subsystem controllers and invokes the periodic sequencer and the event handler.</p>
    
    <h2>Examples</h2>
    <ul>
        <li>Flight Simulator
    </ul>

    <h2>Where does it come from?</h2>
    <p>Starting in 1986, the software pattern was developed to deal with flight simulators that became ever more complex and impossible to maintain.
    </p>

    <h2>When should you use it?</h2>
    <p>The pattern is used in complex time-critical systems. Use it when you need to combine both periodic and aperiodic flows of control. When your modules need to be updated regularly, and also send messages to each other, causing others to change state.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="http://www.sei.cmu.edu/pub/documents/93.reports/pdf/tr14.93.pdf">Structural Modeling: An Application Framework and Development Process for Flight Simulators</a>
        <li><a href="http://citeseer.ist.psu.edu/cache/papers/cs/2454/http:zSzzSzwww.cgl.uwaterloo.cazSz~rnkazmanzSzHPDC.pdf/distributed-flight-simulation-a.pdf">Distributed Flight Simulation:
A Challenge for Software Architecture</a>
    </ul>
</section>

<?php
include 'template/footer.php';
