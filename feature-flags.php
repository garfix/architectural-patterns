<?php
include 'template/data.php';
$pattern = $indexed['Feature Flags'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A configuration of on/off flags that control which features are active</dd>
    </dl>

    <figure><img src="images/feature-flags.drawio.png"><figcaption>Feature Flags</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Keep a list of boolean attributes that represent features. Choose which features are active or inactive in each separate environment.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When too many features are developed and tested at the same time for branching to be feasible.
        <li>To do A/B testing giving different user groups access to different features
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://martinfowler.com/articles/feature-toggles.html">Pete Hodgson on Feature Toggles<a>
    </ul>
</section>

<?php
include 'template/footer.php';
