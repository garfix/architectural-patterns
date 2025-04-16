<?php
include 'template/data.php';
$pattern = $indexed['Error handling features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language structures dealing with errors</dd>
    </dl>

    <figure><img src="images/error-handling-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Try/Catch/Finally</strong> (<code>Java</code>, <code>Python</code>, <code>C#</code>, <code>JavaScript</code>) Structured blocks to handle exceptions and cleanup.</p>
    <p><strong>Checked Exceptions</strong> (<code>Java</code>) Forces explicit handling of exceptions in function signatures.</p>
    <p><strong>Option/Result Types</strong> (<code>Rust</code>, <code>Haskell</code>, <code>Scala</code>) Types used to return values or errors instead of throwing exceptions.</p>
    <p><strong>Assertions</strong> (<code>C</code>, <code>Python</code>, <code>Java</code>, <code>Rust</code>) Conditions that must be true at runtime, used for debugging and contracts.</p>


</section>

<?php
include 'template/footer.php';
