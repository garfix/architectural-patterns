<?php
include 'template/data.php';
$pattern = $indexed['Model-View-Viewmodel'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A UI pattern that automatically binds the visual representation (View) to the domain model (Model) using a specialized component (ViewModel). The view-model also invokes both view-logic and domain-logic.</dd>
    </dl>

    <p>
        The <b>model</b> contains the data and the domain logic of the application.
    </p>
    <p>
        The <b>view</b> is the visual representation of the component that allows the user to interact with the application.
    </p>

    <p>
        The <b>Viewmodel</b> a controller that binds the view state to the model and manages the events of the component.
    </p>

    <figure><img src="images/model-view-viewmodel.drawio.png"><figcaption>Model-View-Viewmodel architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Modern frontend frameworks have a hierarchical component structure where each component is self-contained. The model is not the database on the server, but rather an object in memory. The view is as compact and close to the resulting HTML as possible. The viewmodel automatically takes care of all interactions between model and view. Each component has a lifecycle that consists of hooks that are executed when the component is created, mounted, unmounted, etc. Events are declared in the view and executed by the view-model.
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
