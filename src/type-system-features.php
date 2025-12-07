<?php
include 'template/data.php';
$pattern = $indexed['Type system features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language features regarding the types of data</dd>
    </dl>

    <figure><img alt="" src="images/type-system-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Static Typing</strong> (<code>C</code>, <code>C++</code>, <code>Java</code>, <code>C#</code>, <code>Rust</code>, <code>Go</code>, <code>Haskell</code>, <code>Scala</code>, <code>TypeScript</code>, <code>Swift</code>) Variables have types known at compile time, enabling type checking and optimizations before execution.</p>
    <p><strong>Dynamic Typing</strong> (<code>Python</code>, <code>JavaScript</code>, <code>Ruby</code>, <code>PHP</code>, <code>Lisp</code>, <code>Perl</code>) Variables can hold values of any type and type checking is done at runtime.</p>
    <p><strong>Type Inference</strong> (<code>Haskell</code>, <code>Scala</code>, <code>Rust</code>, <code>Kotlin</code>, <code>Swift</code>, <code>F#</code>, <code>OCaml</code>) The compiler automatically deduces the type of a variable or expression.</p>
    <p><strong>Duck Typing</strong> (<code>Python</code>, <code>Ruby</code>, <code>JavaScript</code>, <code>PHP</code>) Type compatibility is determined by behavior (methods/properties) rather than inheritance.</p>
    <p><strong>Nominal Typing</strong> (<code>Java</code>, <code>C++</code>, <code>C#</code>) Types are considered compatible based on explicit declarations and names.</p>
    <p><strong>Structural Typing</strong> (<code>TypeScript</code>, <code>Go</code>, <code>Scala</code>, <code>OCaml</code>) Type compatibility is determined by the structure (fields/methods) of types rather than names.</p>
    <p><strong>Union Types</strong> (<code>TypeScript</code>, <code>Flow</code>, <code>Haskell</code>, <code>Elm</code>, <code>F#</code>) A value may be one of several explicitly declared types.</p>
    <p><strong>Nullable Types</strong> (<code>Kotlin</code>, <code>TypeScript</code>, <code>Swift</code>, <code>C#</code>) Types that explicitly allow null or undefined values to improve safety.</p>
    <p><strong>Optional Types</strong> (<code>Swift</code>, <code>Rust</code>, <code>Haskell</code>, <code>Scala</code>, <code>F#</code>) Variables can either contain a value or be empty (<code>None</code>, <code>Nil</code>, <code>null</code>).</p>
    <p><strong>Generics / Parametric Polymorphism</strong> (<code>Java</code>, <code>C#</code>, <code>C++</code>, <code>Rust</code>, <code>TypeScript</code>, <code>Scala</code>, <code>Haskell</code>) Allows code to be written generically for any data type while preserving type safety.</p>
    <p><strong>Type Constraints</strong> (<code>Scala</code>, <code>Haskell</code>, <code>Rust</code>, <code>C#</code>) Restrict generic types to certain conditions or interfaces.</p>
    <p><strong>Dependent Types</strong> (<code>Idris</code>, <code>Agda</code>, <code>Coq</code>, <code>F*</code>) Types that depend on values, enabling very precise type constraints at compile time.</p>
    <p><strong>Refinement Types</strong> (<code>LiquidHaskell</code>, <code>F*</code>, <code>Idris</code>) Types that are enriched with logical predicates to enforce invariants.</p>
    <p><strong>Phantom Types</strong> (<code>Haskell</code>, <code>Scala</code>, <code>Rust</code>) Compile-time-only types used to enforce constraints without affecting runtime behavior.</p>

</section>

<?php
include 'template/footer.php';
