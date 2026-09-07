<?php
include 'template/data.php';
$pattern = $indexed['Spatial Computing Interface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A spatial computing interface enables users to interact with digital content in three-dimensional physical space, using technologies such as augmented reality (AR), virtual reality (VR), mixed reality (MR), and extended reality (XR). It combines spatial awareness with natural human interactions like gestures, voice, and eye tracking.</dd>
    </dl>
    <?php showImage($pattern) ?>
    <h2>How does it work?</h2>
    <p>
        Spatial computing systems use sensors (cameras, depth sensors, accelerometers) to map the physical environment and track the user's position and movements. Digital content is then anchored to specific points in physical space, allowing users to walk around, manipulate, and interact with virtual objects as if they were real.
    </p>
    <p>
        Input methods include hand gestures, voice commands, gaze tracking, and handheld controllers. The system renders digital content in real-time based on the user's perspective and actions, creating immersive experiences that blend the physical and digital worlds.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>For immersive training simulations where hands-on practice in a safe environment is beneficial.</li>
        <li>In design and visualization tasks, such as architectural walkthroughs or product prototyping.</li>
        <li>For collaborative remote work where participants can share a virtual space regardless of physical location.</li>
        <li>When contextual information needs to be overlaid onto the real world (e.g., maintenance instructions on machinery).</li>
        <li>For gaming and entertainment that leverages full-body movement and spatial awareness.</li>
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Spatial_computing">Wikipedia on spatial computing</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Augmented_reality">Wikipedia on augmented reality</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Virtual_reality">Wikipedia on virtual reality</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Mixed_reality">Wikipedia on mixed reality</a></li>
    </ul>
</section>

<?php
include 'template/footer.php';
?>