<?php
include 'template/data.php';
$pattern = $indexed['Parallel Programming'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Split up a task into many similar parts and execute these all at the same time. When done, integrate the results.</dd>
    </dl>

    <figure><img src="images/parallel-programming.drawio.png"><figcaption>Parallel programming architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        By splitting up a task that takes n time into m subtasks and execute these in parallel, the task only takes n/m time.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Spidering the internet
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Use it for large tasks that have lots of simular computations, that can be compartimentalized. When time matters.
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Extra infrastructure may need to be set up for parallelization.
    </ul>

    <h2>Common implementation techniques</h2>
    <ul>
        <li>Coroutines in programming languages
        <li>Cloud based
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Parallel_computing">Wikipedia: parallel processing<a>
    </ul>
</section>

<?php
include 'template/footer.php';
