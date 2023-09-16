<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Presentation-Abstraction-Control</h1>
    </header>
    <p>This architecture is a further development of the <a href="mvc.php">Model-View-Controller</a> architecture.
    The MVC is restricted to simple GUI's with one or more views on the same model. If the model consists of substructures that all require they own special way of interaction, a more complex GUI architecture is in order. The PAC architecture does not have the model as its core component, but a hierarchical structure of PAC components. Each PAC component consists of these items:
    <ol>
        <li>Presentation
        <li>Abstraction
        <li>Control
    </ol>
    </p>
    <p><b>Control</b> is somewhat similar to the Controller in the MVC architecture. It processes external events and updates the model. It also directly updates the Presentation part. Yet it is different from the C in MVC in that it passes the changes being made to its parent PAC component.</p>
    <p><b>Abstraction</b> contains the data, like in MVC. However, it may be just part of the complete data structure of the application, and it does not play an active role in the notification of changes.</p>
    <p><b>Presentation</b> is exactly like the View of MVC. It displays the information from the Abstraction.</p>

    PAC components are connected in a hierarchical fashion, thus:<p>
    <p><center><img src="images/pac_1.jpg"></center></p>

    <h2>Examples</h2>
    <ul>
        <li>Most modern compound GUI applications are <i>loosely</i> based on this architecture. However, the architecture is in practice usually much more complicated.
    </ul>

    <h2>Where does it come from?</h2>
    <p><a href="http://iihm.imag.fr/coutaz/">Jo&euml;lle Coutaz</a> first described it in a 1987 article (see Links).
    </p>

    <h2>When should you use it?</h2>
    <p>Use it to get a first idea of how GUI's <i>should</i> be built. Use it if you create an entirely new GUI framework.</p>

    <h2>How does it work?</h2>
    <p>The parent Control creates its child PAC elements, either at program startup, or dynamically at run-time.</p>
    <p>When the control of a PAC element receives a (user) event (1), it may update its Presentation (2a) and/or its Abstraction (2b).
    Then it sends a change event to its parent (3). The parent updates its children (but not the child where the change originated) (5), which all update their Presentation (6a) and/or Abstraction (6b).
    After the children have been updated, the parent is updated (7). This ends when all necessary PAC elements have been updated.
    </p>
    <p><center><img src="images/pac_2.jpg"></center></p>
    <p>Children and parents may send very specific update events to their neighbors. That way, the PAC elements may decide the extent of the effect of the change. Small changes need not be propagated through the entire hierarchy.

    <h2>Problems</h2>
    <p>The existing visual programming tools are somewhat related to this architecture, but have all kinds of quirks and exceptions. So you may try to recognize the architecture in visual tools, but don't try to hold on too much. Also, most tools claim to be based on the MVC architecture, which isn't exactly true either.</p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>The Control is modeled by the Mediator Design Pattern.
        <li>The Presentation is modeled by the Strategy Design Pattern (?)
    </ul>

    <h2>Links</h2>
    <ul>
        <li>Coutaz, J. PAC, an Object Oriented Model for Dialog Design. In Rullinger, H. I. and Shackel, R. (eds),
Human-Computer Interaction - INTERACT 87. Elsevier Science Publishers, 1987, pp 431-436
        <li><a href="http://www.vico.org/pages/PatronsDisseny/Pattern%20Presentation%20Abstra/">Pattern: Presentation-Abstraction-Control</a>
        <li><a href="http://trese.cs.utwente.nl/courses/university_courses/patterns/material/oldstuff/presentation_abstraction_control.pdf">Presentation-abstraction-control Pattern</a>
        <li><a href="http://www1.acm.org/sigs/sigchi/chi97/proceedings/paper/jcc.htm">From Single-User Architectural Design to PAC*: a Generic Software Architecture Model for CSCW</a>
        <li><a href="http://iihm.imag.fr/demos/IntrosPAC/index.html">IntrosPAC</a> In French, but look at the video.
        </ul>
</section>

<?php
include 'template/footer.php';
