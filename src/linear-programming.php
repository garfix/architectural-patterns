<?php
include 'template/data.php';
$pattern = $indexed['Linear Programming'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Linear Programming (LP) finds the best outcome for a linear objective function subject to linear constraints. It's widely used for resource allocation and scheduling problems. S, consider it as solving a system that asks "maximize profit" with limited resources, where everything scales linearly. LP differs from non-linear optimization or integer programming because of its linearity and the availability of powerful polynomial-time solvers; if variables must be integers, the problem becomes harder (integer programming).</dd>
    </dl>
    <?php showImage($pattern) ?>
<h2>How does it work?</h2>
    <p>Linear Programming methods search a space of candidate solutions. They typically define neighbor moves or gradients, evaluate objective functions, and use schedules or memory to escape local optima or to converge reliably.</p>
<h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Linear_programming">Wikipedia: Linear programming</a></li>
    </ol>

</section>

<?php
include 'template/footer.php';
