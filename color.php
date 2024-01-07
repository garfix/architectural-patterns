<?php
include 'template/data.php';
$pattern = $indexed['Color'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Color influences mood and communicates function.</dd>
    </dl>

    <figure><img src="images/color.drawio.png"><figcaption>Color</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>Page background color: white/lightgray for light theme or black for dark theme.
        <li>Primary color: most used color in the website. Communicates the brand. You can have lighter and darker variants.
        <li>Secondary color: this color is best for floating action buttons, selection controls such as sliders and switches, for highlighting selected text, progress bars and for links and headlines
        <li>Contrast: for text to be well readable it should contrast with its background
        <li>Interactive/non-interactive: use different colors for interactive and non-interactive elements
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>People with a form of color-blindness can't see the difference between certain colors
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://uxdesign.cc/how-to-pick-colors-for-your-app-without-a-struggle-bc46c5e19574">How to pick colors for your app without a struggle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
