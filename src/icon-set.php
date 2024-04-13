<?php
include 'template/data.php';
$pattern = $indexed['Icon Set'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A collection of icons in the same style</dd>
    </dl>
    <p>An icon is a short representation of a command or state. By choosing a icon set in stead of gathering icons haphazard you make sure that their style is consistent within the application.</p>

    <figure><img src="images/icon-set.drawio.png"><figcaption>Icon set</figcaption></figure>

    <p>
        Icons are fashionable. The icons of twenty years ago are considered out of style.
    </p>
    <p>
        Some icons are ubiquitous and therefore self-explanatory. Most icons, however, are not immediately clear to most users, and require an additional text-label.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Icon_(computing)">Wikipedia on icons<a>

    </ul>
</section>

<?php
include 'template/footer.php';
