<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>About</h1>
    </header>
    <header class="major">
        <h2>Origin</h2>
    </header>
    <p>
        In 2003 I started a sub-site about architectural patterns, named "Garfixia Software Architectures", and hosted it on the domain I used for my Andreas fansite: <b>https://www.dossier-andreas.net/software_architecture/index.html</b> I had no idea people would be interested, but it actually became quite popular. Many people have used the simple diagrams for presentations, and there are even some references in published books.
    </p>
    <p>Twenty years later I thought it would be good to modernize the site, update the contents, and give it a proper domain.
    <p>
        <center><img src="images/old-site.png" /></center>
    </p>
</section>

<section>
    <header class="major">
        <h2>Pattern selection</h2>
    </header>
    <p>
        This site aims to collect all known architectural patterns. However, many techniques are sometimes labeled "architectural pattern", so it may be useful to define what is considered one on this site.
    </p>
    <dl>
        <dt>Architectural pattern</dt>
        <dd>
            <p>On this site an architectural pattern is an organizational structure that determines the type of system, and defines the main components of a system, and their interactions.</p>
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
</section>

<?php
include 'template/footer.php';
