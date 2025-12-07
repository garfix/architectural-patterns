<?php
include 'template/data.php';
$pattern = $indexed['Data & Memory features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language structures regarding data structures and memory management</dd>
    </dl>

    <figure><img alt="" src="images/data-memory-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Primitive Types</strong> (<code>All languages</code>) Basic data types like integers, floats, booleans, and characters.</p>
    <p><strong>Records / Tuples</strong> (<code>Haskell</code>, <code>Rust</code>, <code>F#</code>, <code>Python</code>, <code>Elixir</code>, <code>Scala</code>) Fixed-size collections of elements, optionally with named fields.</p>
    <p><strong>Objects / Classes</strong> (<code>Java</code>, <code>C++</code>, <code>Python</code>, <code>Ruby</code>, <code>C#</code>) Encapsulate data and behavior using object-oriented principles.</p>
    <p><strong>Interfaces / Protocols / Traits</strong> (<code>Java</code>, <code>C#</code>, <code>Rust</code>, <code>Swift</code>, <code>Python</code>) Abstract types defining method signatures without implementation.</p>
    <p><strong>Enumerations / ADTs</strong> (<code>Rust</code>, <code>Haskell</code>, <code>Scala</code>, <code>F#</code>, <code>Swift</code>) Custom data types that represent one of many fixed values.</p>
    <p><strong>Smart Pointers</strong> (<code>C++</code>, <code>Rust</code>) Automatically managed pointers that encapsulate memory management.</p>
    <p><strong>Garbage Collection</strong> (<code>Java</code>, <code>C#</code>, <code>Go</code>, <code>Python</code>, <code>JavaScript</code>, <code>Ruby</code>) Automatic memory management to reclaim unused memory.</p>
    <p><strong>Manual Memory Management</strong> (<code>C</code>, <code>C++</code>) Developers allocate and free memory explicitly.</p>
    <p><strong>Ownership &amp; Borrowing</strong> (<code>Rust</code>) Memory safety without garbage collection using strict ownership rules.</p>
    <p><strong>Copy-on-Write</strong> (<code>Swift</code>, <code>PHP</code>, <code>Rust</code>) Optimizes memory usage by delaying copying until modification is required.</p>
    <p><strong>Lifetimes</strong> (<code>Rust</code>) Ensures references are valid and memory-safe during their usage.</p>


</section>

<?php
include 'template/footer.php';
