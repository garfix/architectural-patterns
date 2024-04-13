<?php
include 'template/data.php';
$title = "About";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>About</h1>
    </header>

    <header class="major">
        <h2>Change history</h2>
    </header>
    <p>
        <b>2024-04-13</b> Added <a href="cli">Command Line Interface</a> to <a href="presentation">Presentation</a>.
    </p>
    <p>
        <b>2024-04-07</b> Added <a href="utc">UTC</a>, <a href="iso-8601">Standardized Date Format</a> and <a href="unicode">UNICODE</a> as a section "data formats" in <a href="data-patterns">Data</a>.
    </p>
    <p>
        <b>2024-04-01</b> Added <a href="snapshot-sequence">Snapshot Sequence</a>.
    </p>
    <p>
        <b>2024-03-31</b> Added User Interface and User Experience to  <a href="presentation">Presentation</a>. I realize these are large fields in themselves, and it doesn't do justice to them to summarize these in some bullet points, but I just wanted to make a start.
        <br>
        I also added an entry on <a href="explainability">Explainability</a>, a personal favorite of mine in my last projects.
    </p>
    <p>
        <b>2024-02-24</b> Added a section "Single purpose logic and software library" in <a href="application-logic">Application logic</a>, because I'm more and more convinced that this belongs to the essence of a maintainable application.
    </p>
    <p>
        <b>2023-09-16</b> Started the website. Collecting all kinds of patterns.
    </p>

    <header class="major">
        <h2>Target audience</h2>
    </header>
    <p>
        The site intends to help a software developer to build an application. All information is given from the perspective of the software developer. It aims to describe the most important patterns of software itself. Software development also has other aspects (investing, management, testing, user adoption, marketing, etc) but these are not addressed here.
    </p>

    <header class="major">
        <h2>Pattern selection</h2>
    </header>
    <p>
        This site aims to collect all known architectural patterns. However, many techniques may be considered an "architectural pattern", so it may be useful to define what is considered one on this site.
    </p>
    <dl>
        <dt>Architectural pattern</dt>
        <dd>
            <p>An architectural pattern is a specific generic system-wide organization or behaviour. It defines the main parts of the structure, and their interactions.</p>
        </dd>
    </dl>
    <p>
        By calling it <b>specific</b> I exclude things like "natural language processing" or "domain driven design" because it is too broad, and it spans a large number of techniques. I just want to describe patterns that have a direct effect on the code. They're patterns of the system, not of its design or mindset.
    </p>
    <p>
        By <b>generic</b> I mean that it is not bound to any application type. There are patterns that are unique to word processing, web development, embedded, etc, but this site is about the patterns that can be applied in many areas.
    </p>
    <p>
        <b>System-wide</b> means that the pattern has an effect throughout the system, and not just within a single module.
    </p>
    <p>
        The meaning of the word "pattern" used here comes closest to this one of the Cambridge Dictionary: "a particular way in which something is done or organized, or in which something happens" (<a href="https://dictionary.cambridge.org/dictionary/english/pattern">source</a>)
    </p>
    <p>
        A <b>system</b> can be a complete application, but may also be, and often is, part of larger application. Note that the definition doesn't mention hardware, or even software, as these structures may be implemented in any way.
    </p>
    <p>
        Like species in nature, software patterns can have <b>varieties</b>; a software pattern can be seen as a group of similar varieties. And like nature, a variety can be as similar to one pattern as it is to another. To which pattern does it belong? I tend to group the variety with both patterns, and you can pick the pattern that best meets your intent.
    </p>
    <p>
        When is a variety sufficiently different from another to warrant a new pattern? To determine this we need a strong definition of the pattern. Hence I start every pattern with a definition. Next, a pattern has a prototypical form and some variants. A good rule-of-thumb to discern between two patterns would be to ask yourself if the software that matches the pattern can be easily changed into the other pattern.
    </p>
</section>

<section>
    <header class="major">
        <h2>Definitions</h2>
    </header>
    <p>
        Here are some concepts that occur in multiple patterns.
    </p>
    <dl>
        <dt>Dependency</dt>
        <dd>
            <b>Volatile dependencies</b> are services that don't behave the same in all circumstances. Examples: database, file system, sending email, random number generator, current time. A file may not exist, disk may be full, email may not be sent, etc. The opposite of volatile is <b>stable</b>. A stable depenency is dependable: it behaves the same in all circumstances.
        </dd>
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
            <p>A model (domain model, business model) is the combination of data and domain logic software that governs the restrictions on this data.</p>
        </dd>
        <dt>Application logic</dt>
        <dd>
            <p>Domain logic that is application-specific</p>
        </dd>
        <dt>View</dt>
        <dd>
            <p>A view forms the presentation of data to the user and allows the user to enter information.</p>
        </dd>
        <dt>Presenter</dt>
        <dd>
            <p>The logic that prepares data to be shown in the (passive) view.</p>
        </dd>
        <dt>Controller</dt>
        <dd>
            <p>A controller processes incoming requests (made by the user, or by other software) by interacting with the model and updating the view.</p>
        </dd>
        <dt>Message</dt>
        <dd>
            <p>A piece of information that is published by a component to all subscribers, based on a specific event.</p>
        </dd>
    </dl>
</section>

<section>
    <header class="major">
        <h2>Origin</h2>
    </header>
    <p>
        I once found myself as a software developer in a position where I was asked to build a new application, a virtual driving instructor. I had no
        idea how to approach this problem. I could just start building classes and functions and hope for the best, but I felt I needed to have an idea of the big picture of the application before I endeavoured the project. If I had the structure wrong, the program could be be arduous to complete and it could become unnecessarily slow. Furthermore, I would have no way to communicate to others about the structure of the application. I needed an architecture, before I started building. But I didn't have any examples to base it upon.
    <p>
        In 2003 I started a sub-site about architectural patterns, named "Garfixia Software Architectures", and hosted it on the domain I used for my Andreas fansite: <b>https://www.dossier-andreas.net/software_architecture/index.html</b> I had no idea people would be interested, but it actually became quite popular. Many people have used the simple diagrams for presentations, and there are even some references in published books.
    </p>
    <p>
        Twenty years later I thought it would be good to modernize the site, update the contents, and give it a proper domain.
    <p>
    <p>
        The span of the website expanded from "list all known architectural patterns", via "list all patterns that seem to have the same gist as these known patterns" to "categorize all patterns I see as architectural in scope", and ended up in "all application-wide software techniques and deliverables". The latter is still in line with the original aim: to help the software developer in their quest to create an original application.
    </p>
    <figure><img src="images/old-site.png"><figcaption>The header of the old website</figcaption></figure>
</section>

<section>
    <header class="major">
        <h2>Disclaimer</h2>
    </header>
    <p>
        I built this site to help software developers build an application. I have some experience in the field where I can draw upon, but I don't have personal experience with all patterns described here. It may contain errors. Also, the naming of patterns is not standardized, and different sources may name the same pattern differently. Finally, a number of remarks on this site may come across as my personal opinion, and for the moment I admit this is true. However, I intend to replace these with remarks from thought leaders in the field.
    </p>
    <p>
        Best to treat this website as an index and a source of inspiration and follow the links provided for more in-depth in each subject.
    </p>
</section>

<?php
include 'template/footer.php';
