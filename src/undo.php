<?php
include 'template/data.php';
$pattern = $indexed['Undo'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Store the actions of a user as objects in a list, and allow actions to be undone</dd>
    </dl>
    <p>
        Many applications allow a user to "undo" their actions. After the user has made some changes and realizes that they are on the wrong track, they may want to reverse one or more actions and take a different approach. This can be facilitated by the application by keeping track of all actions in a stack. Each action needs to know how to perform itself, and to reverse its effects.
    </p>
    <p>
        A variation is <b>undo/redo</b> where a user can go up and down the action stack. Actions on the stack are not removed on undo, but the action pointer is just moved back one action. A redo will move the action pointer forward.
    </p>
    <p>
        Actions may be extended. Rather than treating each typed letter as a single action, update the "edit" each time a new letter is typed. This way the edit can be undone in a single step.
    </p>

    <figure><img src="images/undo.drawio.png"><figcaption>Undo</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Text processing, image editing
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When a user is allowed to correct edits
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Undo">Wikipedia</a>
    </ol>
</section>

<?php
include 'template/footer.php';
