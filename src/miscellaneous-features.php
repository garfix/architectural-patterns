<?php
include 'template/data.php';
$pattern = $indexed['Miscellaneous features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language features that don't fit well into any of the other categories</dd>
    </dl>

    <figure><img alt="" src="images/miscellaneous-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>REPL</strong> (<code>Python</code>, <code>Ruby</code>, <code>Scala</code>, <code>Clojure</code>, <code>Elixir</code>) Interactive shell to run expressions and get immediate feedback.</p>
    <p><strong>Macros</strong> (<code>Rust</code>, <code>Lisp</code>, <code>Elixir</code>) Compile-time code generation or transformation.</p>
    <p><strong>Reflection</strong> (<code>Java</code>, <code>C#</code>, <code>Python</code>, <code>Ruby</code>) Inspect and modify the program structure at runtime.</p>
    <p><strong>FFI (Foreign Function Interface)</strong> (<code>Rust</code>, <code>Python</code>, <code>Lua</code>, <code>Haskell</code>, <code>Go</code>) Call functions written in other languages like C.</p>
    <p><strong>Hot Reloading</strong> (<code>React Native</code>, <code>Flutter</code>, <code>Elixir</code>, <code>Rails</code>) Update code without restarting the application.</p>
    <p><strong>Meta-programming</strong> (<code>Ruby</code>, <code>Lisp</code>, <code>Elixir</code>, <code>Scala</code>) Programs that manipulate or generate other programs.</p>
    <p><strong>Scripting Support</strong> (<code>Python</code>, <code>JavaScript</code>, <code>Ruby</code>, <code>Lua</code>) Designed for rapid prototyping and automation.</p>
    <p><strong>Cross-Compilation</strong> (<code>Rust</code>, <code>Go</code>, <code>C</code>, <code>C++</code>) Compile code for platforms other than the current one.</p>
    <p><strong>Embedded DSLs</strong> (<code>Scala</code>, <code>Haskell</code>, <code>F#</code>, <code>Ruby</code>) Create domain-specific languages within a host language.</p>

</section>

<?php
include 'template/footer.php';
