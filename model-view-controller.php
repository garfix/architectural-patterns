<?php
include 'template/data.php';
$pattern = $indexed['Traditional Model-View-Controller'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A UI pattern that separates the visual representation (View), the domain model (Model), and the code needed to connect the two (Controller), allowing the view to read directly from the model.</dd>
    </dl>

    <p>
        This is the oldest UI pattern. Its original strength was the separation of model, view, and controller. But since there's now also the <a href="model-view-adapter">Model-View-Adapter</a> pattern, its distinguishing feature is the fact that the view reads from the model.  It's still used by simple web applications where the view accesses the database in order to find the information to display.
    </p>

    <figure><img src="images/model-view-controller.drawio.png"><figcaption>Model-View-Controller architecture diagram</figcaption></figure>

    <p>
        The <b>model</b> contains the data and the domain logic of the application.
    </p>
    <p>
        The <b>view</b> is the visual representation of the component that allows the user to interact with the application.
    </p>
    <p>
        The <b>controller</b> provides the wiring of the application: reading from the UI, writing to the model, error handling, navigation.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Plain PHP websites where the view contains a mix of markup and PHP code, but where the domain logic is carefully placed into a separate module.
    </ul>

    <h2>Where does it come from?</h2>
    The MVC architecture was developed as part of the Smalltalk group at the famous Xerox PARC. It is usually credited
    to the Norwegian <a href="http://heim.ifi.uio.no/~trygver/trygve.html">Trygve Reenskaug</a>, who worked there
    as a visiting scientist in 1978/1979. MVC is since then an integral part of the Smalltalk programming language.

    <h2>When should you use it?</h2>
    <p>
        Separating view code from model code is always a good idea. It allows both of them to be tested in isolation and leads to less code duplication.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>The view is tied to the model. If the same view needs to be used with a different model, it needs to be duplicated.
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Registering views with a model to receive change notifications is typically implemented by the
        <a href="http://sern.ucalgary.ca/courses/SENG/609.04/W98/lamsh/observerLib.html">Observer Design Pattern</a>.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller">Wikipedia on Model-View-Controller</a>
        <li><a href="https://stefanoborini.com/book-modelviewcontroller/">Book: Understanding Model-View-Controller - Stefano Borini</a>
    </ul>
</section>

<?php
include 'template/footer.php';
