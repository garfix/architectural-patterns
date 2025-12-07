<?php
include 'template/data.php';
$pattern = $indexed['Explainability'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The faculty of explaining to the user how a result was reached, or could not be reached</dd>
    </dl>

    <figure><img alt="" src="images/explainability.drawio.png"><figcaption>Explainability</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Any rule based system has an explicit representation of how each result was reached by a combination of sub-results. By storing these intermediate results and representing them to the user later, a form of explainability is formed.
    </p>
    <p>
        An explanation can be formed by presenting the rules fired in a human-readable form, or a plain text human readable form of the reasoning can be logged as the algorithm executes. A "reasoning" log.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>An expert system can tell you how it reached its conclusion
        <li>A rule based algorithm can store its intermediary results and present these to the user later in a user-friendly manner
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When the results of the algorithm have legal consequences and the legislator demands explainability
        <li>When the reason why a result was reached is just as important as the result itself
        <li>When you want to show the expert you work with that the results created are formed in the way they had intended
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>Neural networks in principle can't explain how their results are formed. But attempts to reach explainability in AI are being made.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Algorithmic_transparency">Wikipedia on algorithmic explainability<a>
        <li><a href="https://en.wikipedia.org/wiki/Explainable_artificial_intelligence">Wikipedia on explainable AI<a>

    </ul>
</section>

<?php
include 'template/footer.php';
