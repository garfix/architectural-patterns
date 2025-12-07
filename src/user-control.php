<?php
include 'template/data.php';
$pattern = $indexed['User control'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The user should have complete control over their data</dd>
    </dl>

    <p>
        The user needs to be in control of their data. This means that they should be able to perform any action they need and receive feedback on their actions.
    </p>

    <figure><img alt="" src="images/user-control.drawio.png"><figcaption>User control</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        User control has the following aspects:
    </p>
    <ul>
        <li>Efficiency: Common things should be easy. Complex things should be possible.
        <li>User centricity: the application should be built to best (most efficiently) serve the user, rather than reflect the database structure
        <li>Context: The application should be adapted to the device it runs on in a way that best serves the user
        <li>Undo / redo: whenever possible, allow a user to reverse an action (mistake) they made. Provide a "Cancel" button and an "Exit" button on a dialog
        <li>Feed-forward / feedback: it should be clear what consequence each action will have (feed-forward) and it should be clear what the effect of each action has been (feedback)
        <li>Introduce shortcuts for power users that work intensively with your application
    </ul>

    <h2>Links</h2>
    <ul>
    <li><a href="https://maze.co/collections/ux-ui-design/ui-design-principles/">The 6 key principles of UI design
<a>
    </ul>
</section>

<?php
include 'template/footer.php';
