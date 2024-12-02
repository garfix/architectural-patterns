<?php
include 'template/data.php';
$pattern = $indexed['Software license'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A document that describes the obligations of users of the software</dd>
    </dl>
    <p>
        Without a license a software product is bound by copyright law. Only the maker of the software gets to decide who can copy it. The license is added by the maker to make their wishes with respect to copying, modification, and selling explict. Many standard licenses are available.
    </p>

    <figure><img src="images/license.drawio.png"><figcaption>Search architecture diagram</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>MIT license
        <li>GPL
        <li>Commercial
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>If you want your software to be shared and you want to explain to potential users what you do and don't allow
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://choosealicense.com/">Choose an open source license</a>
    </ol>
</section>

<?php
include 'template/footer.php';
