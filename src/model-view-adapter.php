<?php
include 'template/data.php';
$pattern = $indexed['Model-View-Adapter'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A UI pattern that separates the visual representation (View) from the domain model (Model), and provides a controller (Adapter), that works as an intermediary between them. The view does not access the model.</dd>
    </dl>

    <figure><img alt="" src="images/model-view-adapter.drawio.png"><figcaption>Model-View-Adapter architecture diagram</figcaption></figure>

    <p>
        The <b>model</b> contains the data and the domain logic of the application.
    </p>
    <p>
        The <b>view</b> is the visual representation of the component that allows the user to interact with the application.
    </p>
    <p>
        The <b>adapter</b>, like the controller, provides the wiring of the application: reading from the UI, writing to the model, error handling, navigation. It also adapts model data to be used by the view.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>The Python framework, using Jinja 2 as templating engine
    </ul>

    <h2>When should you use it?</h2>
    <p>
        It makes the view more reusable than MVC. Preparing the data by the adapter for the view is a bit more work than allowing the view to access it directly, but it helps to think about the performance of the data retrieval, since it is concentrated in one place.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93adapter">Wikipedia on Model-View-Adapter</a>
    </ul>
</section>

<?php
include 'template/footer.php';
