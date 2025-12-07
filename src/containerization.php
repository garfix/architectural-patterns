<?php
include 'template/data.php';
$pattern = $indexed['Containerization'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Make each application of the solution run in its own isolated space, and declare its build structure.</dd>
    </dl>

    <figure><img alt="" src="images/containerization.drawio.png"><figcaption>Containerization</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The build structure of the application is laid down in a configuration file. The container tool builds an image from this configuration. To run the application, the tool builds a container from the image.
    </p>
    <p>
        It facilitates development by providing a complete pre-built environment for a new developer. It faciltates deployment by providing an image that can be used as-is on multiple servers.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Docker, Docker Compose, Docker Swarm
        <li>Kubernetes
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When building your application requires an effort
        <li>When deploying the application on a containerized platform
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Containerization_(computing)">Wikipedia on containerization</a>
    </ul>
</section>

<?php
include 'template/footer.php';
