<?php
include 'template/data.php';
$pattern = $indexed['Process Control'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A pattern aimed at controlling a variable resource.</dd>
    </dl>

    <p>
        You want to keep some variable (say: temperature) constant. At the same time external factors
        are causing it to change (cold from the outside). There is a way (a heater) to influence the
        variable. Now all you need to do is determine when to use it to keep the variable constant.<br>
        In this example heating up the temperature is the <b>Process</b>.
        Determining when and to what extent to influence it is the <b>Control</b>.<br>
        Temperature is called the <b>Controlled Variable</b>, the output of the system.
        Its desired value (25&ordm; C) is called the <b>Set Point</b>.
        Temperature is here also an <b>Input Variable</b>, since it is measured by a thermometer to know the current value of
        temperature. The state of the heater is called the <b>Manipulated Variable</b>, because it is manipulated
        by the system.<br>
        Since the output of this system is also used as input to the system, it is a <b>Closed Loop</b>
        system. An <b>Open Loop</b> system would not have it. And since the temperature is used directly as
        an Input Variable, it is a <b>Feedback Control System</b>. A <b>Feedforward Control System</b>
        would use a variable that indirectly indicates the Controlled Variable as input.
    </p>
    <p>
        The <b>Process</b> is any process that affects the Controlled Variable.
    </p>
    <p>
        The <b>Controller</b> can be any subsystem that has both knowledge of the influence of the Input
        Variables and the effect of changing the Manipulated Variables on the Controlled Variables.
    </p>

    <h2>How does it work?</h2>
    <p>
        Process Control architectures have some variations. They can be either Open Loop or Closed Loop.
        The Closed Loop systems can be either Feedback systems or Feedforward systems.
    </p>
    <p>
        <b>Open Loop</b> systems just perform a function on on the Input Variables to determine how to control the process.
    </p>

    <figure><img src="images/process_control_1.jpg"><figcaption>Proces Control: open loop</figcaption></figure>

    <p>
        <b>Feedback Closed Loop</b> systems measure changes in the Controlled Variable directly, and feed them
        back as Input Variables into the Controller.
    </p>

    <figure><img src="images/process_control_2.jpg"><figcaption>Proces Control: closed loop</figcaption></figure>

    <p>
        <b>Feedforward Closed Loop</b> systems do not measure changes in the Controlled Variable directly, because
        they the Controlled Variable is not affected immediately, or because the Controlled Variable cannot be
        measured directly. In stead, variables named <b>Intermediate Variables</b> that are indications of the
        Controlled Variable are fed back as Input Variables.
    </p>
    <figure><img src="images/process_control_2.jpg"><figcaption>Proces Control: feedforward closed loop</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Cruise Control.
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        Process Control is an engineering discipline.
    </p>

    <h2>When should you use it?</h2>
    <p>
        Use such an architecture when there is something to be controlled and you have a number of outside
        factors disturbing it.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Industrial_process_control">Wikipedia</a>
    </ul>
</section>

<?php
include 'template/footer.php';
