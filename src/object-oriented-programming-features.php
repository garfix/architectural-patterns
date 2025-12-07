<?php
include 'template/data.php';
$pattern = $indexed['Object Oriented Programming features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language structures implementing the object oriented programming (OOP) paradigm</dd>
    </dl>

    <figure><img alt="" src="images/object-oriented-programming-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Encapsulation</strong> (<code>Java</code>, <code>C++</code>, <code>Python</code>, <code>Ruby</code>, <code>C#</code>) Grouping data and related functions together and hiding implementation details.</p>
    <p><strong>Inheritance</strong> (<code>Java</code>, <code>C++</code>, <code>Python</code>, <code>Ruby</code>) Ability of one class to inherit fields and methods from another.</p>
    <p><strong>Polymorphism</strong> (<code>Java</code>, <code>C++</code>, <code>C#</code>, <code>Python</code>) Treating different types through a common interface.</p>
    <p><strong>Mixins / Traits</strong> (<code>Scala</code>, <code>Rust</code>, <code>Ruby</code>, <code>Elixir</code>) Reusable behavior that can be included in multiple classes or modules.</p>
    <p><strong>Interfaces / Abstract Classes</strong> (<code>Java</code>, <code>C#</code>, <code>TypeScript</code>, <code>Swift</code>) Contracts defining method signatures to be implemented.</p>

</section>

<?php
include 'template/footer.php';
