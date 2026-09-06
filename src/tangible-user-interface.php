<?php
include 'template/data.php';
$pattern = $indexed['Tangible user interface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A tangible user interface (TUI) allows users to interact with digital information through physical objects and environments, such as RFID blocks, physical dials/knobs, or augmented physical tools.</dd>
    </dl>
    <?php showImage($pattern) ?>
    <h2>How does it work?</h2>
    <p>
        Physical objects are embedded with sensors, actuators, and identifiers (like RFID or Bluetooth) that communicate with the system. User actions on these objects (moving, touching, rotating) are translated into digital input, and the system can provide feedback through changes in the objects (e.g., lights, vibration, movement).
    </p>
    <p>
        This creates a direct coupling between physical and digital states, enabling intuitive interaction with complex data or systems.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>For interactive installations, museum exhibits, or educational tools where physical manipulation aids understanding.</li>
        <li>In IoT applications where physical controls (dials, switches) are more appropriate than touchscreens or voice.</li>
        <li>When spatial or tactile interaction provides advantages over purely graphical interfaces.</li>
        <li>For collaborative scenarios where multiple users can interact with the same physical objects.</li>
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Tangible_user_interface">Wikipedia on tangible user interface</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Internet_of_things">Wikipedia on Internet of Things (IoT)</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Haptic_technology">Wikipedia on haptic technology</a></li>
    </ul>
</section>

<?php
include 'template/footer.php';
?>