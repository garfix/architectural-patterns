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

    <figure><img alt="" src="images/color.drawio.png"><figcaption>Color</figcaption></figure>

    <h2>Main, secondary and accent color</h2>
    <p>
        Also called primary, secondary and tertiary colors, they form the theme of an application.
        <ul>
            <li> Primary/main is used for 60% of the design. This neutral color gives room for the secondary and accent colors to stand out.
            <li>The secondary is used for 30% of the design. This is a middle ground that compliments the primary and accent colors. When designing for a brand, this color tends to be the secondary color for the brand.
            <li> The accent is used for 10% of the design. This helps "accessorize" the site by giving pops of colors that keep the viewer's attention.
        </ul>
        Add one or two extra colors to complete the palette. There are many sites on the internet that help you find / create a color palette.
    </p>

    <h2>Remarks</h2>
    <ul>
        <li>Don't use pure black either as foreground or background. It strains the eye. Use dark gray (#444444) instead.
        <li>Page background color: white/lightgray for light theme or black for dark theme.
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
        <li><a href="https://medium.com/rutgers-creative-x/understanding-color-for-ui-design-ec53719e880e">Understanding Color for UI Design</a>
    </ul>
</section>

<?php
include 'template/footer.php';
