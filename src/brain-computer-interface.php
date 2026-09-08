<?php
include 'template/data.php';
$pattern = $indexed['Brain-computer interface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A brain-computer interface (BCI) is a direct communication pathway between the brain's electrical activity and an external device, enabling the brain to control or interact with computers or other machinery without involving the body's neuromuscular pathways.</dd>
    </dl>
    <?php showImage($pattern) ?>

    <p>
        BCIs acquire brain signals, process them to extract meaningful features, and translate those features into device commands. This allows users to control applications, prosthetics, or communicate through thought alone.
    </p>
    <p>
        The technology can be invasive (implanted electrodes) or non-invasive (EEG-based), and is used in medical rehabilitation, assistive technology, and emerging human-computer interaction paradigms.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Controlling a robotic arm using motor imagery signals from the motor cortex.</li>
        <li>Typing on a virtual keyboard by selecting letters through P300 event-related potentials.</li>
        <li>Controlling a wheelchair or smart home environment via steady-state visually evoked potentials (SSVEP).</li>
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When traditional input methods (keyboard, mouse, touch) are not possible due to motor impairments.</li>
        <li>For creating novel interaction experiences in gaming, virtual reality, or hands-free control.</li>
        <li>In neurorehabilitation to promote neuroplasticity and restore lost motor functions.</li>
        <li>For research into cognitive states, attention, and mental workload monitoring.</li>
    </ul>

    <h2>How does it work?</h2>
    <p>
        The BCI pipeline consists of signal acquisition (electrodes), preprocessing (filtering, artifact removal), feature extraction (e.g., power spectral density, event-related potentials), classification (machine learning algorithms), and device control output. The system adapts to the user's brain patterns through training and feedback.
    </p>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Brain%E2%80%93computer_interface">Wikipedia: Brain-computer interface</a></li>
    </ol>
</section>

<?php
include 'template/footer.php';
?>