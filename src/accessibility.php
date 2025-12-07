<?php
include 'template/data.php';
$pattern = $indexed['Accessibility'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Make sure those of us with poor eyesight will be able to see your application as well.</dd>
    </dl>

    <figure><img alt="" src="images/accessibility.drawio.png" alt="icon of head with squinting eyes"><figcaption>Accessibility</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        With a few simple techniques you can make your application a lot better visible to people with poor or no eyesight.
    </p>

    <h2>Examples</h2>
    <p>
        These examples are web-based
    </p>
    <p>
        Try to solve the issues using semantic HTML. But if that's not possible, add <a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA">ARIA (Accessible Rich Internet Applications)</a> constructs.
    </p>
    <ul>
        <li><b>Low contrast text:</b> make sure your text contrasts with its background. <a href="https://webaim.org/resources/contrastchecker/">Online contrast checker</a>, <a href="https://benmyers.dev/blog/fix-low-contrast-text/">More information</a>
        <li><b>Missing alternative text: </b> add an <i>alt</i> attribute to every img tag that is not purely decorative. The alt text describes the image to the person that can't see it. If no text is needed, create an empty alt-tag ("")
        <li><b>Empty links and buttons:</b> Achor (a) tags without <i>href</i> or <i>title</i> attribute. Buttons without text. These do not tell the visually impaired person what happens when they click on them.
        <li><b>Missing form labels:</b> It's best to wrap each input element in a label element, or link the label to the input using a <i>for</i> attribute.
        <li><b>Missing document language: </b> Set the language of the document: &lt;html lang="en"&gt; (see <a href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">this document</a> for language codes)
    </ul>

    <p>
        General examples
    </p>
    <ul>
        <li>Make the design keyboard-friendly by ensuring it can be navigated through using the tab key.
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Always, unless you're sure that all of your users have excellent eyesight
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Web_accessibility">Wikipedia on web accessibility</a>
    </ul>

    <h2>Credits</h2>
    <ul>
        <li>Using information from "Easy Accessibility Wins: Better Accessibility in Five Minutes or Less", by Ashleigh Lodge
    </ul>
</section>

<?php
include 'template/footer.php';
