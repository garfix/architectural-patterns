<?php
include 'template/data.php';
$pattern = $indexed['Functional features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language structures implementing the functional programming paradigm</dd>
    </dl>

    <figure><img src="images/functional-programming-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Immutability</strong> (<code>Haskell</code>, <code>Scala</code>, <code>Elixir</code>, <code>Clojure</code>, <code>Rust</code>) Once created, values cannot be changed, reducing side effects.</p>
    <p><strong>Pure Functions</strong> (<code>Haskell</code>, <code>Elm</code>, <code>F#</code>) Functions without side effects that always produce the same output for given input.</p>
    <p><strong>Lazy Evaluation</strong> (<code>Haskell</code>, <code>Scala</code>, <code>Python (via generators)</code>) Delays computation until the result is needed.</p>
    <p><strong>Pattern Matching</strong> (<code>Haskell</code>, <code>Rust</code>, <code>Scala</code>, <code>F#</code>, <code>OCaml</code>) Decomposes data structures using matching rules.</p>
    <p><strong>Option/Maybe Types</strong> (<code>Haskell</code>, <code>Scala</code>, <code>Rust</code>, <code>F#</code>) Wrapper for values that may be present or not.</p>
    <p><strong>Monads</strong> (<code>Haskell</code>, <code>Scala</code>, <code>F#</code>) Abstractions that structure computations with side effects.</p>
    <p><strong>Function Composition</strong> (<code>Haskell</code>, <code>Scala</code>, <code>F#</code>) Combining functions to build complex behavior.</p>
    <p><strong>Pipelines</strong> (<code>Elixir</code>, <code>F#</code>, <code>OCaml</code>, <code>JavaScript</code> with RxJS) Chain function calls for readability.</p>

</section>

<?php
include 'template/footer.php';
