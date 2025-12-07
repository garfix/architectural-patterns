<?php
include 'template/data.php';
$pattern = $indexed['Double Buffering'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Use an offline graphics buffer to compose the next animation frame</dd>
    </dl>

    <figure><img alt="" src="images/double-buffering.drawio.png"><figcaption>Double buffering</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        An animation consists of a series of frames. In most cases storing all frames in memory is too costly. Using just a single buffer to show the current frame and prepare the next frame causes a noticeable flicker. A common solution is to use two bufferes: an active buffer and an inactive buffer. Show the current frame on the active buffer while preparing the next frame on the inactive buffer. Then make the active buffer inactive and vice versa, and repeat.
    </p>
    <p>
        LCD screens, like CRT screens, are drawn line by line, from top top bottom. If a buffer switch takes place somewhere halfway the screen, the upper part of the screen will show the old buffer while the lower part of the screen will show the new buffer. This causes a noticeable "tear". To avoid this, make the switch when the monitor is not drawing lines. This is called <b>vertical synchronization</b> (VSYNC).
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you need a smooth animation
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Multiple_buffering#Double_buffering_in_computer_graphics">Wikipedia on double buffering<a>
        <li><a href="https://en.wikipedia.org/wiki/Screen_tearing#Vertical_synchronization">Wikipedia on vertical synchronization<a>

    </ul>
</section>

<?php
include 'template/footer.php';
