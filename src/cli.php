<?php
include 'template/data.php';
$pattern = $indexed['Command Line Interface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Executing commands on the application from the OS shell environment</dd>
    </dl>

    <figure><img src="images/cli.drawio.png"><figcaption>Command Line Interface</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The user may a command on the application by starting the application with extra parameters. An application may be a pure CLI application that only allows itself to the run from the command line. But it may also be a GUI application or a service, and still allow users to run commands on it from the command line.
    </p>
    <p>
        A CLI does not only allow power users to perform routine actions on the applications quicker, it also allows these commands to be scripted and run automatically.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When certain application commands should be scriptable.
        <li>For commands that take too much time to set up via the GUI interface
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Command-line_interface#Application_command-line_interfaces">Wikipedia on application command line interfaces<a>
    </ul>
</section>

<?php
include 'template/footer.php';
