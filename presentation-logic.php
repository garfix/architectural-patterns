<?php
include 'template/data.php';
$pattern = $indexed['Presentation Logic'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Collect and prepare data to be shown in the user interface.</dd>
    </dl>

    <figure><img src="images/presentation-logic.drawio.png"><figcaption>Presentation Logic</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The user interface mostly shows data that is stored in the database. Presentation logic retrieves the data from the database and transforms it in a way that is informative to the user.
    </p>
    <p>
        Separating this logic from the user interface helps to un-clutter the view. It also makes it easier for the front-end developer to design the user interface as they are not distracted by the imperative code and can focus on declarative user interface code. Separate presentation logic can also be faster because it encourages the focus on speed of data retrieval.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Model-View-Presenter
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93presenter">Wikipedia on model-view-presenter<a>
    </ul>
</section>

<?php
include 'template/footer.php';
