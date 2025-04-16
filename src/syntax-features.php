<?php
include 'template/data.php';
$pattern = $indexed['Syntax features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Basic features to get things done</dd>
    </dl>

    <figure><img src="images/syntax-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Conditionals (<code>if</code>, <code>else</code>, <code>switch</code>)</strong> (<code>All major languages</code>) Basic decision-making structures to control flow based on conditions.</p>
    <p><strong>Loops (<code>for</code>, <code>while</code>, <code>do...while</code>)</strong> (<code>C</code>, <code>C++</code>, <code>Java</code>, <code>Python</code>, <code>JavaScript</code>, <code>Go</code>, <code>Rust</code>) Repetition constructs to execute code multiple times.</p>
    <p><strong>Pattern Matching</strong> (<code>Haskell</code>, <code>Scala</code>, <code>Rust</code>, <code>F#</code>, <code>Elixir</code>, <code>OCaml</code>) A mechanism for branching logic based on structural patterns.</p>
    <p><strong>Destructuring</strong> (<code>JavaScript</code>, <code>Python</code>, <code>Rust</code>, <code>Elixir</code>) Binding parts of a structure (array, object, tuple) to individual variables.</p>
    <p><strong>List Comprehensions</strong> (<code>Python</code>, <code>Haskell</code>, <code>Elixir</code>, <code>Scala</code>) Concise syntax for generating new lists by transforming existing ones.</p>
    <p><strong>Optional Chaining</strong> (<code>JavaScript</code>, <code>TypeScript</code>, <code>Swift</code>, <code>C#</code>) Access properties/methods safely on potentially null/undefined objects.</p>
    <p><strong>Ternary Operator</strong> (<code>C</code>, <code>Java</code>, <code>JavaScript</code>, <code>Python</code>, <code>C++</code>) Short syntax for conditional expressions: <code>condition ? expr1 : expr2</code>.</p>
    <p><strong>Guards</strong> (<code>Haskell</code>, <code>Elixir</code>, <code>F#</code>, <code>Scala</code>) Expressions used to provide additional conditions in function definitions or pattern matches.</p>
    <p><strong>Null-Coalescing Operator</strong> (<code>C#</code>, <code>JavaScript</code>, <code>TypeScript</code>, <code>Swift</code>) Provides a fallback value when an expression evaluates to null.</p>
    <p><strong>Switch Expressions</strong> (<code>Java</code>, <code>Kotlin</code>, <code>C#</code>, <code>Swift</code>) Switch/case expressions that return values, not just execute logic.</p>

</section>

<?php
include 'template/footer.php';
