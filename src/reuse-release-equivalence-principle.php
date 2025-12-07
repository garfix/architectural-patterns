<?php
include 'template/data.php';
$pattern = $indexed['Reuse/Release Equivalence Principle'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Functionality should be grouped together in a way that makes most sense in a release</dd>
    </dl>

    <figure><img alt="" src="images/reuse-release-equivalence-principle.drawio.png"><figcaption>Reuse/Release Equivalence Principle</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A software library is has releases in the form of versions. A library must have some kind of single purpose. If it contains many incoherent functionalities, it doesn't make sense to release them together, and they should be split up into multiple modules.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://wiki.c2.com/?ReuseReleaseEquivalencePrinciple">C2 on Reuse/Release Equivalence Principle<a>
    </ul>
</section>

<?php
include 'template/footer.php';
