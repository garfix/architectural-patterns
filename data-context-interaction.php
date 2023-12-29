<?php
include 'template/data.php';
$pattern = $indexed['Data-Context-Interaction'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Provide an explicit representation of the use case to make the purpose of code more understandable.</dd>
    </dl>

    <figure><img src="images/data-context-interaction.drawio.png"><figcaption>Data-Context-Interaction architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        This pattern makes the use case an explicit entity. A <a href="https://en.wikipedia.org/wiki/Use_case">use case</a> is an action a user can perform on a system (add an object to a shopping cart, take out an insurance policy). The idea is that the application logic of a system is an implementation of use cases. These uses cases, however, are implicit in current OOP. There's no central use case class. It is distributed over many classes. Therefore it isn't clear how the classes work together from looking at the code alone. This means that what a system does is still for a large part in the heads of the programmers, and this is a hurdle for new developers that need to work on the system.
    </p>
    <p>
        Data-Context-Interaction (DCI) tries to solve this by making use cases explicit. An ongoing attempt is implementing this idea in a new programming language called <a href="https://github.com/jcoplien/trygve/blob/master/doc/trygve.md">trygve</a>, but it can be implemented in most other languages as well. The use case is then implemented as a <b>context</b>.
    </p>
    <p>
        The context defines <b>roles</b> to perform the functions of the use case. Each role is simply a collection of methods. The methods (or <b>scripts</b>) are injected in an empty object. This stateless object is the role. Note that the role consists only of those methods that are necessary for this specific use case, whereas in current OOP practices, a class contains methods for multiple use cases. Multiple roles can be assigned to a single object.
    </p>
    <p>
        When all roles have been instantiated, the use case can be executed. This process is called <b>interaction</b>
    </p>
    <ul>
        <li><b>Data</b> data from the database
        <li><b>Context</b> Each use case is implemented as a separate context. This context contains roles.
        <li><b>interaction</b> The execution of the play that involves the roles.
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>In large systems with many use cases, that threatens to become incomprehensible.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>This is not a widely used pattern yet, so there may not be much support. Experiment with it in a small-scale setting first.
    </ul>

    <h2>Where does it come from?</h2>
    <p>
        It was created by <a href="https://en.wikipedia.org/wiki/Trygve_Reenskaug" title="Trygve Reenskaug">Trygve Reenskaug</a> (the creator of the well-known pattern Model-View-Controller) and <a href="https://en.wikipedia.org/wiki/James_O._Coplien" title="James O. Coplien">James O. Coplien</a>.
    </p>

    <h2>Links</h2>
    <ul>
    <li><a href="https://fulloo.info/">The pattern's website<a>
    <li><a href="https://en.wikipedia.org/wiki/Data,_context_and_interaction">Wikipedia on Data-Context-Interaction</a>
    <li><a href="https://www.youtube.com/watch?v=AExqBBc_zME&t=910s">Tryvge Reenskaug explaining the pattern</a>
    </ul>
</section>

<?php
include 'template/footer.php';
