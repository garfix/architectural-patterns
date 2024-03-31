<?php
include 'template/data.php';
$pattern = $indexed['Page layout'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Rules governing the composition of ui elements on a page</dd>
    </dl>

    <figure><img src="images/page-layout.drawio.png"><figcaption>Page layout</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Page layout has the following aspects:
    </p>
    <ul>
        <li><b>Visual hierarchy:</b> Steer the focus of the user by making some elements bigger or bolder than others, or by giving them a more prominent color.
        <li><b>Negative space:</b> Give your elements some breathing room. Don't cram everything on one page.
        <li><b>Proximity:</b> Place elements with a similar function together
        <li><b>Rhythm:</b> Repeat the same UI elements, but create variations in each element
        <li><b>Alignment:</b> Align ui elements
        <li><b>Layout:</b> Use similar layouts for similar functions. Example: grid-layout
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://maze.co/collections/ux-ui-design/ui-design-principles/">UI design principles<a>
        <li><a href="https://en.wikipedia.org/wiki/Visual_hierarchy">Visual hierarchy<a>
        <li><a href="https://www.figma.com/resource-library/ui-design-principles/">UI design principles<a>
    </ul>
</section>

<?php
include 'template/footer.php';
