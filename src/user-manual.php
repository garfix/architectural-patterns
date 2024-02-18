<?php
include 'template/data.php';
$pattern = $indexed['User Manual'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A document or website that explains the function of the application to the end user</dd>
    </dl>

    <figure><img src="images/user-manual.drawio.png"><figcaption>User Manual</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A user guide, also commonly known as a user manual, is intended to assist users in using a particular product, service or application. It's usually written by a technician, product developer, or a company's customer service staff.
    </p>
    <p>The use manual may contain</p>
    <ul>
        <li>The conceptual background of the application: purpose, ideas
        <li>A glossary: definitions of terms
        <li>A guide how to use all functions of the system
        <li>A troubleshooting section
        <li>Search functionality
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Every application intented for other users than yourself should have a user manual. If it doesn't, some users simply won't understand your application and will not use it. It will also benefit you as a developer as it encourages users to use the application in the way you intended.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/User_guide">Wikipedia on user guide<a>
    </ul>
</section>

<?php
include 'template/footer.php';
