<?php
include 'template/data.php';
$pattern = $indexed['Algorithm'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A a finite sequence of rigorous instructions, typically used to solve a class of specific problems or to perform a computation.</dd>
    </dl>

    <figure><img alt="" src="images/algorithm.drawio.png"><figcaption>Algorithm</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        An algorithm is any routine that solves a problem. There are well-known algorithms for common problems like search, but any code that solves a problem qualifies as an algorithm.
    </p>
    <p>
        An algorithm is part of a system's business logic. If a known algorithm is available, use it, but make sure it has been used widely and/or been tested well. If you write your own algorithm, it's a good candidate for a unit test. If the algorithm passes the test with the most common input, and with all extreme values, you can be reasonably sure that it works well.
    </p>
    <p>
        An algorithm should not only <i>work</i>, it should also be <i>fast</i>. Create the algorithm with real-world data in mind, or even as part of the test.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Determine the linear trend in a series of values
        <li>Calculate an output based on inputs and a series of operations
        <li>Search
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>Whenever you need to solve a problem or just to calculate something
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>An algorithm may have so many possible combinations of input that it's hard to test fully
        <li>The algorithm may be fast enough for a small test case, but to slow for real-world applications
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Algorithm">Wikipedia on algorithm<a>
    </ul>
</section>

<?php
include 'template/footer.php';
