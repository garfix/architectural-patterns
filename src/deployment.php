<?php
include 'template/data.php';
$pattern = $indexed['Deployment'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Preparing and moving the application from the repository to the application server</dd>
    </dl>

    <figure><img alt="" src="images/deployment.drawio.png"><figcaption>Deployment</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
       When a change to the application has been made, the old application on the server needs to be replaced by the new application. This may involve copying the code, building assets, bringing the application down and up again.
    </p>

    <p><b>Continuous delivery</b>: Producing software in short cycles with high speed and frequency so that reliable software can be released at any time, with a simple and repeatable deployment process when deciding to deploy.</p>
    <p><b>Continuous integration</b>: Frequent merging of several small changes into a main branch.</p>


    <h2>Problems</h2>
    <ul>
        <li>Writing tests takes time in the short run and this slows down the time to ship your application
        <li>Not writing tests takes time in the long run that goes into debugging code
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Software_deployment">Wikipedia on deployment<a>
        <li><a href="https://en.wikipedia.org/wiki/CI/CD">Wikipedia on CI/CD</a>
    </ul>
    </section>

<?php
include 'template/footer.php';
