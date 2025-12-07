<?php
include 'template/data.php';
$pattern = $indexed['Reactive programming features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Features implementing the reactive programming paradigm that propagates changes in values to depending structures</dd>
    </dl>

    <figure><img alt="" src="images/reactive-programming-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Observables</strong> (<code>JavaScript</code>, <code>Dart</code>, <code>Kotlin</code>, <code>RxJava</code>) Objects representing a stream of asynchronous data.</p>
    <p><strong>Signals / Reactive Variables</strong> (<code>Svelte</code>, <code>SolidJS</code>, <code>Vue</code>, <code>MobX</code>) Automatically update views or computations when dependencies change.</p>
    <p><strong>Computed Properties</strong> (<code>Vue</code>, <code>Knockout</code>, <code>SolidJS</code>) Values derived from reactive inputs that automatically stay up to date.</p>
    <p><strong>Streams / Dataflow</strong> (<code>RxJS</code>, <code>Cycle.js</code>, <code>Elm</code>, <code>Dart</code>) Declarative handling of time-varying values or events.</p>
    <p><strong>Backpressure Management</strong> (<code>RxJava</code>, <code>Reactive Streams</code>) Techniques to control data flow when consumers can&#39;t keep up.</p>


</section>

<?php
include 'template/footer.php';
