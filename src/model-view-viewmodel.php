<?php
include 'template/data.php';
$pattern = $indexed['Model-View-Viewmodel'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A UI pattern that adds an abstract representation of the view outside of the view: the viewmodel. The state of the view is automatically synchronized with the viewmodel by a binder. The binder is provided by a framework. The viewmodel also serves as adapter, preparing data for the view and the model.</dd>
    </dl>

    <p>
        The <b>view</b> is the visual representation of the component that allows the user to interact with the application.
    </p>
    <p>
        The <b>viewmodel</b> has two functions: it keeps the state of the view, outside of the view. Basically it contains the values of the ui components. It also serves as an adapter, preparing data for the view and for the model.
    </p>
    <p>
        The <b>binder</b> syncs the state of the view to the viewmodel and vice-versa.
    </p>
    <p>
        The <b>model</b> contains domain logic available on the client and connects to external domain (e.g. database)
    </p>

    <figure><img alt="" src="images/model-view-viewmodel.drawio.png"><figcaption>Model-View-Viewmodel architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Modern frontend frameworks have a hierarchical component structure where each component is self-contained. The view is as compact and close to the resulting output (i.e. HTML) as possible. The view declares any handler functions needed that are activated when events occur. The viewmodel contains both a data structure and adapter logic. The state of the view is automatically synced to the viewmodel data structure by the binder that is part of the framework. The viewmodel also serves as adapter and prepares data for the view and the model. Each component has a lifecycle that consists of hooks that are executed when the component is created, mounted, unmounted, etc. Since these are often client-server applications, part of the domain is available in the client, and part of it on the server.
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
    <p>The "magic" of the viewmodel must be well-understood and designed. If not, a simple change in the input can lead to an avalanche of automatic effects, that can slow the application down.</p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93viewmodel">Wikipedia</a>
    </ul>
</section>

<?php
include 'template/footer.php';
