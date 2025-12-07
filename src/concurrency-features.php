<?php
include 'template/data.php';
$pattern = $indexed['Concurrency & Parallelism features'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Language support for doing many during the same period of time (concurrency) and at exeactly the same time (parallelism)</dd>
    </dl>

    <figure><img alt="" src="images/concurrency-features.drawio.png"></figure>

    <h2>Features</h2>
    <p><strong>Threads</strong> (<code>Java</code>, <code>C++</code>, <code>Python</code>, <code>C#</code>) Lightweight processes used for parallel execution.</p>
    <p><strong>Async/Await</strong> (<code>JavaScript</code>, <code>Python</code>, <code>C#</code>, <code>Kotlin</code>) Syntax sugar for asynchronous programming.</p>
    <p><strong>Futures/Promises</strong> (<code>JavaScript</code>, <code>Scala</code>, <code>Java</code>, <code>Python</code>) Represent values that will be available in the future.</p>
    <p><strong>Coroutines</strong> (<code>Python</code>, <code>Kotlin</code>, <code>C++20</code>, <code>Lua</code>) Functions that can suspend and resume execution.</p>
    <p><strong>Actors</strong> (<code>Elixir</code>, <code>Erlang</code>, <code>Scala (Akka)</code>, <code>Kotlin</code>) Concurrency model using isolated units that communicate via messaging.</p>
    <p><strong>Channels</strong> (<code>Go</code>, <code>Rust</code>) Typed communication paths used for safe data exchange between threads.</p>



</section>

<?php
include 'template/footer.php';
