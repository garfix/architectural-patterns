<?php
include 'template/data.php';
$pattern = $indexed['Model-View-Viewmodel'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A UI pattern that introduces a datastructure that represents the state of the view, yet is located outside of it: the view-model. The state of the view is automatically synchronized with the view model by a binder. Controller logic is performed by the framework.</dd>
    </dl>

    <p>
        The <b>model</b> contains the domain logic of the application and connects to external APIs. It also has routines for preparing data for the view.
    </p>
    <p>
        The <b>view</b> is the visual representation of the component that allows the user to interact with the application.
    </p>

    <p>
        The <b>view-model</b> the state of the view, outside of the view, abstracted from ui component specifics.
    </p>
    <p>
        The <b>binder</b> syncs the state of the view to the view-model.
    </p>

    <figure><img src="images/model-view-viewmodel.drawio.png"><figcaption>Model-View-Viewmodel architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Modern frontend frameworks have a hierarchical component structure where each component is self-contained. The view is as compact and close to the resulting output (i.e. HTML) as possible. The view declares any handler functions needed that are activated when events occur. The view-model is a data structure that represents the data of the view. The state of the view is automatically synced to the view-model by the binder that is part of the framework. Each component has a lifecycle that consists of hooks that are executed when the component is created, mounted, unmounted, etc.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Vue
        <li>React
    </ul>

    <h2>Where does it come from?</h2>
    <p>It was invented by Microsoft architects Ken Cooper and Ted Peters specifically to simplify event-driven programming of user interfaces.</p>

    <h2>When should you use it?</h2>
    <p>MVVM works very well when building a complex Single Page Application.</p>

    <h2>Problems</h2>
    <p>The "magic" of the view-model must be well-understood and designed. If not, a simple change in the input can lead to an avalanche of automatic effects, that can slow the application down.</p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93viewmodel">Wikipedia</a>
    </ul>
</section>

<?php
include 'template/footer.php';
