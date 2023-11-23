<?php
include 'template/data.php';
$pattern = $indexed['Index'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Make data available immediately that otherwise would require a scan.</dd>
    </dl>

    <p>
        This pattern collects documents, parses them and feeds the structured content into a data structure that is optimized for retrieval.
    </p>

    <figure><img src="images/index.drawio.png"><figcaption>Indexing architecture diagram</figcaption></figure>

    <p>
        The purpose of storing an index is to optimize speed and performance in finding relevant documents for a search query. Without an index, the search engine would scan every document in the corpus, which would require considerable time and computing power.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Search engines
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>If your user needs immediate access to information
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>It can take a lot of space to index documents
    </ul>

    <h2 id="links">Links</h2>
    <ol>
        <li><a href="https://en.wikipedia.org/wiki/Search_engine_indexing">Wikipedia on search engine indexing</a>
    </ol>
</section>

<?php
include 'template/footer.php';
