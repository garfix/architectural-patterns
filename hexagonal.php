<?php
include 'template/data.php';
$pattern = $indexed['Hexagonal Architecture'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Ports and Adapters provides domain logic without dependencies on external services. The dependencies are replaceable at runtime.</dd>
    </dl>

    <p>
        The main aim of this architecture is to decouple the application's core logic from the services it uses (database, email, time), and the services that use it (user interface, framework). This allows different services to be "plugged in", and it allows the logic to be run without these services.
    </p>
    <p>
        The domain logic, or business logic, of an application consists of the algorithms that are essential to its purpose. They implement the use cases that are the heart of the application. The external services are <i>not</i> essential. They can be replaced without changing the purpose of the application. Examples: database access and other types of storage, user interface components, e-mail and other communication components, hardware devices. In a strict sense of this architecture even the application's framework is a set of services. The core logic of an application should not depend on these services in this architecture (so that it becomes "framework agnosic").
    </p>
    <p>
        Advantages of this architecture:
        <ul>
            <li>The core logic can be tested independent of outside services.</li>
            <li>It is easy to replace services by other ones that are more fit in view of changing requirements.</li>
        </ul>
    </p>

    <div class="features">
        <article>
            <figure><img src="images/ports-and-adapters.drawio.png"><figcaption>Ports and Adapters architecture diagram</figcaption></figure>
        </article>
    </div>

    <p>
        The number of ports depends on the application. The shown number of 6 ports nicely matches the name of the architecture. But the point of the architecture's name is not that the number six matters, but that <i>the core logic is at the center</i>. A realistic number of ports is about 2 to 4.
    </p>

    <p>
        A <b>port</b> is an entry point, provided by the core logic. It defines a set of functions.
    </p>
    <p>
        <b>Primary ports</b> are the main API of the application. They are <i>called by</i> the primary adapters that form the user side of the application. Examples of primary ports are functions that allow you to change objects, attributes, and relations in the core logic.
    </p>
    <p>
        <b>Secondary ports</b> are the interfaces for the secondary adapters. They are <i>called by</i> the core logic. An example of a secondary port is an interface to store single objects. This interface simply specifies that an object be created, retrieved, updated, and deleted. It tells you nothing about the way the object is stored.
    <p>
        An <b>adapter</b> is a bridge between the application and the service that is needed by the application. It fits a specific port.
    </p>
    <p>
        A <b>primary adapter</b> is a piece of code between the user and the core logic. One adapter could be a unit test function for the core logic. Another could be a controller-like function that interacts both with the graphical user interface and the core logic. The primary adapter calls the API functions of the core logic.
    </p>
    <p>
        A <b>secondary adapter</b> is an implementation of the secondary port (which is an interface). For instance, it can be a small class that converts application storage requests to a given database, and return the results of the database in a format requested by the secondary port. It can also be a mock database object needed to unit tests certain parts of the core logic. The core logic calls the functions of the secondary adapter.
    </p>

    <h2>How does it work?</h2>
    <p>
        The application can be used by different types of users. Each of these can create their own variant of the application, by plugging in custom adapters.
        <ul>
            <li>An instance of the application is created, as well as the adapters.</li>
            <li>The secondary adapters are passed to the core logic (dependency injection).</li>
            <li>The primary adapters receive a link to the core logic. They start to drive the application.</li>
            <li>User input is processed by one or more primary adapter(s) and passed to the core logic.</li>
            <li>The core logic interacts with the secondary adapters only.</li>
            <li>Output of the core logic is returned to the primary adapters. They feed it back to the user.</li>
        </ul>
    </p>

    <h2>Variants</h2>
    <p>
        The <b>Onion architecture</b> emphasis the layers in the pattern and doesn't stress the ports and adapters. Inner layers define interfaces. Outer layers implement interfaces.
    </p>
    <p>
        The <b>Clean architecture</b> is similar to the onion architecture and integrates the <a href="https://en.wikipedia.org/wiki/Entity-control-boundary">Entity-Control-Boundary</a> pattern
    </p>

    <h2>Where does it come from?</h2>
    <p>
        Alistair Cockburn invented it in 2005. It is a response to the desired to create thoroughly testable applications. As Cockburn says: "Allow an application to equally be driven by users, programs, automated test or batch scripts, and to be developed and tested in isolation from its eventual run-time devices and databases."
    </p>

    <h2>When should you use it?</h2>
    <p>
        A strong argument for this pattern is testability. Code that can be run without external dependencies like time, randomness, database, or sending email is easier to test.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>The prime motive for this pattern is correctness of domain logic. If performance is not also taken into consideration when developing the domain logic, the resulting system may be correct, but inheritently slow.
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li><a href='http://en.wikipedia.org/wiki/Dependency_injection'>Dependency injection</a> is used to pass the secondary adapters to the core logic</li>
        <li>Secondary ports are implemented as <a href='http://en.wikipedia.org/wiki/Interface_%28computing%29'>interfaces</a>. Secondary adapters implement these interfaces.</li>
        <li>You could create a <a href='http://en.wikipedia.org/wiki/Factory_method_pattern'>factory</a> for adapters for a given service.</li>
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="http://alistair.cockburn.us/Hexagonal+architecture">Hexagonal Architecture</a> Alistair Cockburn's original article on this architecture.
        <li><a href="https://jeffreypalermo.com/2008/07/the-onion-architecture-part-1/">Onion Architecture</a> Jeffrey Palermo's original article on this architecture
        <li><a href="https://blog.cleancoder.com/uncle-bob/2012/08/13/the-clean-architecture.html">Clean Architecture</a> Robert C. Martin's original article on this architecture
        <li><a href="https://en.wikipedia.org/wiki/Hexagonal_architecture_(software)">Wikipedia on Hexgonal Architecture</a>
        <li><a href="http://www.natpryce.com/articles/000772.html">Visualising Test Terminology</a> Nat Price's information on testing using Ports-And-adapters.
        <li><a href="https://blog.ploeh.dk/2013/12/03/layers-onions-ports-adapters-its-all-the-same/">Layers, Onions, Ports, Adapters: it's all the same - Mark Seemann
        <li><a href="https://en.wikipedia.org/wiki/Entity-control-boundary">Entity-Control-Boundary on Wikipedia</a>
        <li><a href="https://vaclavkosar.com/software/Boundary-Control-Entity-Architecture-The-Pattern-to-Structure-Your-Classes">Boundary Control Entity Architecture Pattern
    </ul>
</section>

<?php
include 'template/footer.php';
