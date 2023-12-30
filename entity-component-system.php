<?php
include 'template/data.php';
$pattern = $indexed['Entity-Component-System'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Entities are not defined as a hierarchy, but as tabular data</dd>
    </dl>

    <figure><img src="images/entity-component-system.drawio.png"><figcaption>Entity-Component-System architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Entity component system (ECS) is a software architectural pattern mostly used in video game development for the representation of game world objects. An ECS comprises entities composed from components of data, with systems which operate on entities' components.
    </p>
    <p>
        ECS follows the principle of composition over inheritance, meaning that every entity is defined not by a type hierarchy, but by the components that are associated with it. Systems act globally over all entities which have the required components.
    </p>

    <ul>
        <li><b>Entity</b> An entity represents a general-purpose object. In a game engine context, for example, every coarse game object is represented as an entity. Usually, it only consists of a unique id. Implementations typically use a plain integer for this.

        <li><b>Component</b> A component labels an entity as possessing a particular aspect, and holds the data needed to model that aspect. For example, every game object that can take damage might have a Health component associated with its entity. Implementations typically use structs, classes, or associative arrays.

        <li><b>System</b> A system is a process which acts on all entities with the desired components. For example, a physics system may query for entities having mass, velocity and position components, and iterate over the results doing physics calculations on the sets of components for each entity.
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When the attributes of entities require frequent actions.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Entity_component_system">Wikipedia on Entity-Component-System<a>
    </ul>
</section>

<?php
include 'template/footer.php';
