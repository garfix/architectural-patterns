<?php
include 'template/data.php';
$pattern = $indexed['Hierarchical MVC'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A UI pattern that forms a tree of components, each only connected to its parent and children.</dd>
    </dl>

    <p>
        The component hierarchy concept in UI's was first described as part of the Presentation-Abstraction-Control model, hence the pattern is usually called PAC. The name "Hierachical MVC" makes it less dependent on the specifics of PAC and allows it to be used in combination with other ui patterns.
    </p>

    Components are connected in a hierarchical fashion, thus:<p>

    <figure><img alt="" src="images/hierarchical-component-ui.drawio.png"><figcaption>Hierarchical ui architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A component can send events to its parent and call methods on its child components.
    </p>

    <figure><img alt="" src="images/pac-article.png"><figcaption>Image from the original article by Jo&euml;lle Coutaz</figcaption></figure>

    <h2>Examples</h2>
    <ul>
        <li>All modern non-trivial applications use this pattern to control complexity.
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        <a href="http://iihm.imag.fr/coutaz/">Jo&euml;lle Coutaz</a> first described it in a 1987 article (see Links).
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Presentation%E2%80%93abstraction%E2%80%93control">wikipedia on Presentation-Abstraction-Control</a>
        <li>Coutaz, J. PAC, an Object Oriented Model for Dialog Design. In Rullinger, H. I. and Shackel, R. (eds),
Human-Computer Interaction - INTERACT 87. Elsevier Science Publishers, 1987, pp 431-436
        <li><a href="https://en.wikipedia.org/wiki/Hierarchical_model%E2%80%93view%E2%80%93controller">wikipedia on Hierarchical model-view-conroller</a>
        </ul>
</section>

<?php
include 'template/footer.php';
