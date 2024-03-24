<?php
include 'template/data.php';
$pattern = $indexed['Clarity'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The user interface should be easy to understand</dd>
    </dl>

    <figure><img src="images/clarity.drawio.png"><figcaption>Clarity</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Clarity has the following aspects:
    </p>
    <ul>
        <li>Familiarity: the user interface components and patterns should be familiar to the user. If you introduce a new component, make it simple to understand and provide documentation on the page.
        <li>Visual hierarchy: the information that's most relevant to the user should be shown prominently. Secondary information should get less attention.
        <li>Consistency: use similar controls and similar colors for similar functions
        <li>Learnability: the application should be easy to learn
        <li>The main navigation flow should be clear to the user
        <li>Don't make me think: a clear interface requires little mental effort on the part of the user
        <li>Present choices positively: a checkbox "Extra lettuce", rather than "No extra lettuce", is easier to comprehend. Exception: items that are positive by default and require an action to be negative (i.e. "Hide subtitles")
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://maze.co/collections/ux-ui-design/ui-design-principles/">The 6 key principles of UI design
<a>
    </ul>
</section>

<?php
include 'template/footer.php';
