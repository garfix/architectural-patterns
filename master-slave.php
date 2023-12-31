<?php
include 'template/data.php';
$pattern = $indexed['Master-Slave'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <p>SETI is the most successful example of this architecture. They asked all computer owners in the world to donate their idle computer time to the processing of large amounts of raw data. They created the largest distributed computer system to this day. SETI has a single central computer, called the Master. It sends a package of data to the computers on the Internet, called the Clients. Each Client then processes this data and sends its result back to the Master server. The Master integrates the results in its database and feeds the Client more data. Clients come and go as they please.</p>

    <h2>How does it work?</h2>
    <p>The Master has a number of independent jobs that need to be executed. It sends separate jobs to all its Slaves. The slave processes the job and sends back the results to the Master. The Master integrates the results in its database and feeds the Client more data.</p>

    <figure><img src="images/master-and-slave.drawio.png"><figcaption>Master-Slave architecture diagram</figcaption></figure>

    <p>The architecture may also allow clients to register and unregister at will.</p>

    <h2>Examples</h2>
    <ul>
        <li><a href="http://www.seti.org/">SETI</a>
    </ul>

    <h2>When should you use it?</h2>
    <p>Use this architecture when you have several bulk processes that take different lengths of time to execute and don't depend on each other. Use it when there is enough processing power available but limited time.
    </p>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>The architecture is especially effective when used in a network of computers.
        <li>The Slaves may also run as separate processes on the same microprocessor, but there should be a good reason not to process them sequentially.
    </ul>

    <h2>Links</h2>
    <ul>
        None yet
    </ul>
</section>

<?php
include 'template/footer.php';
