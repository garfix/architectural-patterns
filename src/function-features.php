<?php
include 'template/data.php';
$pattern = $indexed['Function features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language structures related to functions</dd>
    </dl>

    <figure><img src="images/function-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>First-Class Functions</strong> (<code>JavaScript</code>, <code>Python</code>, <code>Haskell</code>, <code>Scala</code>, <code>Swift</code>) Functions are treated like values that can be passed, returned, or assigned.</p>
    <p><strong>Closures</strong> (<code>JavaScript</code>, <code>Python</code>, <code>Rust</code>, <code>Swift</code>) Functions that capture and use variables from their defining scope.</p>
    <p><strong>Higher-Order Functions</strong> (<code>Haskell</code>, <code>Scala</code>, <code>JavaScript</code>, <code>Python</code>) Functions that take other functions as parameters or return them.</p>
    <p><strong>Currying</strong> (<code>Haskell</code>, <code>Scala</code>, <code>JavaScript</code>) Transforming a function of multiple arguments into a sequence of unary functions.</p>
    <p><strong>Partial Application</strong> (<code>Haskell</code>, <code>Scala</code>, <code>Python</code>) Pre-filling some function arguments to create specialized functions.</p>
    <p><strong>Default Arguments</strong> (<code>Python</code>, <code>C++</code>, <code>JavaScript</code>, <code>Kotlin</code>) Function parameters that take a default value if not provided.</p>
    <p><strong>Variadic Functions</strong> (<code>C</code>, <code>C++</code>, <code>Python</code>, <code>JavaScript</code>) Functions that accept a variable number of arguments.</p>
    <p><strong>Tail Recursion</strong> (<code>Scheme</code>, <code>Haskell</code>, <code>Scala</code>, <code>Elixir</code>) Optimization technique for recursive functions that reuse stack frames.</p>
    <p><strong>Anonymous Functions / Lambdas</strong> (<code>Python</code>, <code>JavaScript</code>, <code>C++</code>, <code>Java</code>, <code>Swift</code>) Functions without a name, often used for short operations.</p>

</section>

<?php
include 'template/footer.php';
