<?php
include 'template/data.php';
$pattern = $indexed['Agent'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A program that continuously perceives and acts on its environment, without human intervention.</dd>
    </dl>
    <p>
        Once a software agent is started up, it keeps executing autonomously to perform its task.
    </p>

    <figure><img src="images/agent.drawio.png"><figcaption>Agent architecture diagram</figcaption></figure>

    <p>
        Agents come in all forms, from simple to complex. These are the main levels of complexity:

        <ul>
            <li>A <b>simple reflexive agent</b> follows simple rules to determine its next action
            <li>A <b>state based agent</b> keeps a representation of the environment to better inform its decision
            <li>A <b>goal based agent</b> has goals to achieve, and creates plans or searches for ways to decide what to do next
            <li>A <b>utility based agent</b> distinguishes between possible actions by choosing the one that best matches a utility function
        </ul>
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Vacuum-cleaning robot
        <li>Chatbot
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>If the task requires an autonomous program that is permanently active and runs without human intervention
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Software_agent">Wikipedia</a>
    </ol>
</section>

<?php
include 'template/footer.php';
