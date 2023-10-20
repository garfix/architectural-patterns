<?php
$title = "About";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>About</h1>
    </header>
    <header class="major">
        <h2>Box-and-arrow diagram</h2>
    </header>
    <p>
        A box represents a process, an arrow the flow of data (either push or pull), a trapezoid (?) data.
    </p>
    <header class="major">
        <h2>Definitions</h2>
    </header>
    <p>
        Here are some concepts that occur in multiple patterns.
    </p>
    <dl>
        <dt>Client</dt>
        <dd>
            <p>A client is a software application that needs some functionality from a server, external to the client, to work properly.</p>
        </dd>
        <dt>Service</dt>
        <dd>
            <p>A software function performed by a server in response to a client request.</p>
        </dd>
        <dt>Server</dt>
        <dd>
            <p>A software application that provides a service.</p>
        </dd>
        <dt>Model</dt>
        <dd>
            <p>A model is the combination of data and the business logic software that governs the restrictions on this data.</p>
        </dd>
        <dt>View</dt>
        <dd>
            <p>A view forms the presentation of data to the user and allows the user to suggest changes to this data.</p>
        </dd>
        <dt>Controller</dt>
        <dd>
            <p>A controller processes incoming requests (made by the user, or by other software) by interacting with the model and addressing the view.</p>
        </dd>
        <dt>Message</dt>
        <dd>
            <p>A piece of information that is published by a component to all subscribers, based on a specific event.</p>
        </dd>
    </dl>
    <header class="major">
        <h2>Pattern selection</h2>
    </header>
    <p>
        This site aims to collect all known architectural patterns. However, many techniques are sometimes labeled "architectural pattern", so it may be useful to define what is considered one on this site.
    </p>
    <dl>
        <dt>Architectural pattern</dt>
        <dd>
            <p>An architectural pattern is an organizational structure that determines the type of system, and defines the main components of a system, and their interactions.</p>
        </dd>
    </dl>
    <p>
        This excludes "Object oriented programming", as it does not define any main components.
    </p>
    <p>
        The architectural pattern "determines the type of application": any website is an N-tier application. File sharing systems are usually Peer to Peer systems. And SETI is a Master-Slave system.
    </p>
    <p>
        A "system" may also be, and often is, part of larger system. Note that the definition doesn't mention hardware, or even software, as these structures may be implemented in any way.
    </p>
    <p>
        Like species in nature, software patterns can have varieties; a sofware pattern can be seen as a group of similar varieties. And like nature, a variety can be as similar to one pattern as it is to another. To which pattern does it belong? I tend to group the variety below both patterns, and you can pick the pattern that best meets your intent.
    </p>
    <p>
        When is a variety sufficiently different from another to warrant a new pattern? To determine this we need a strong definition of the pattern. Hence I start every pattern with a definition. Next, a pattern has a prototypical form and some variants. A good rule-of-thumb to discern between two patterns would be to ask yourself if the software that matches the pattern can be easily changed into the other pattern.
    </p>
</section>

<section>
    <header class="major">
        <h2>Origin</h2>
    </header>
    <p>
        In 2003 I started a sub-site about architectural patterns, named "Garfixia Software Architectures", and hosted it on the domain I used for my Andreas fansite: <b>https://www.dossier-andreas.net/software_architecture/index.html</b> I had no idea people would be interested, but it actually became quite popular. Many people have used the simple diagrams for presentations, and there are even some references in published books.
    </p>
    <p>Twenty years later I thought it would be good to modernize the site, update the contents, and give it a proper domain.
    <p>
        <figure><img src="images/old-site.png"><figcaption>The header of the old website</figcaption></figure>
    </p>
</section>

<?php
include 'template/footer.php';
