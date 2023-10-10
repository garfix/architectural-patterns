<?php
include 'template/data.php';
$pattern = $indexed['Ports and Adapters'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>
    <p>
        The main aim of this architecture is to decouple the application's core logic from the services it uses. This allows different services to be "plugged in", and it allows the application to be run without these services.
    </p>
    <p>
        The core logic, or business logic, of an application consists of the algorithms that are essential to its purpose. They implement the use cases that are the heart of the application. When you change them, you change the essence of the application.
    </p>
    <p>
        The services are <i>not</i> essential. They can be replaced without changing the purpose of the application. Examples: database access and other types of storage, user interface components, e-mail and other communication components, hardware devices.
    </p>
    <p>
        In a strict sense of this architecture even the application's framework is a set of services. The core logic of an application should not depend on these services in this architecture (so that it becomes "framework agnosic").
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
            <figure><img src="images/ports-and-adapters.png"><figcaption>Ports and Adapters architecture diagram</figcaption></figure>
        </article>
        <article>
            <table>
            <tr><td><b>yellow:</b></td><td>core logic</td></tr>
            <tr><td><b>light red:</b></td><td>primary ports</td></tr>
            <tr><td><b>light blue:</b></td><td>primary adapters</td></tr>
            <tr><td><b>dark red:</b></td><td>secondary ports</td></tr>
            <tr><td><b>dark blue:</b></td><td>secondary adapters</td></tr>
            </table>
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

    <h2>Where does it come from?</h2>
    <p>
        Alistair Cockburn invented it in <a href='http://c2.com/cgi/wiki?PortsAndAdaptersArchitecture'>2005</a>. It is a response to the desired to create thoroughly testable applications. As Cockburn says: "Allow an application to equally be driven by users, programs, automated test or batch scripts, and to be developed and tested in isolation from its eventual run-time devices and databases."
    </p>

    <h2>When should you use it?</h2>
    <p>
        If 100% unit-test code coverage is important to your application. Also, if you want to be able to switch your storage mechanism, or any other type of third-party code. The architecture is especially useful for long-lasting applications that need to keep up with changing requirements.
    </p>

    <h2>Common implementation techniques</h2>

    <p>
    Check <a href="http://alistair.cockburn.us/Hexagonal+architecture">Alistair Cockburn's article</a> and <a href="http://matteo.vaccari.name/blog/archives/154">Matteo Vaccari's blog</a> for some code examples.
    </p>
    <p>
    Some details:<br />

    <ul>
        <li><a href='http://en.wikipedia.org/wiki/Dependency_injection'>Dependency injection</a> is used to pass the secondary adapters to the core logic</li>
        <li>Secondary ports are implemented as <a href='http://en.wikipedia.org/wiki/Interface_%28computing%29'>interfaces</a>. Secondary adapters implement these interfaces.</li>
        <li>You could create a <a href='http://en.wikipedia.org/wiki/Factory_method_pattern'>factory</a> for adapters for a given service.</li>
    </ul>
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="http://alistair.cockburn.us/Hexagonal+architecture">Hexagonal Architecture</a> Alistair Cockburn's original article on this architecture.
        <li><a href="https://en.wikipedia.org/wiki/Hexagonal_architecture_(software)">Wikipedia on Hexgonal Architecture</a>
        <li><a href="http://matteo.vaccari.name/blog/archives/154">The birthday greetings kata</a> Matteo Vaccari's blog that provides an example Java implementation of the port and adapter.
        <li><a href="http://www.natpryce.com/articles/000772.html">Visualising Test Terminology</a> Nat Price's information on testing using Ports-And-adapters.
    </ul>
</section>

<?php
include 'template/footer.php';
