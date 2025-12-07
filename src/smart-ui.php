<?php
include 'template/data.php';
$pattern = $indexed['Smart-UI'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A single class provides both model, view, and controller logic</dd>
    </dl>

    <figure><img alt="" src="images/smart-ui.drawio.png"><figcaption>Smart-UI</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        This pattern is characterized by its lack of separation between domain model and view code.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Simple GUI applications
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>When maintenance of the application is not a factor of importance, because its stays small.
    </ul>

    <h2>Problems</h2>
    If the pattern is used in larger projects, the following problems start to occur
    <ul>
        <li>Access and modification of the current state from outside is cumbersome, being contained into the all-encompassing visual object: external objects that want to modify the current counter need to make sure that the represented value is synchronized, for example, forcing a call to _update(), or having the Counter object provide a setValue() method
        <li>It is difficult for other visual objects to report the same information, maybe with two different visual aspects (e.g. both as a counter and as a progress bar)
        <li>The resulting class is difficult to test. The only way to stress it through its public interface and functionality is to actually probe it with GUI events, which is impractical for reasons we will examine later.
        <li>The logic dealing with visual aspect (i.e. handling and layouting widgets, updating the label on the button), interaction aspect (handling the user initiated mouse click to perform the increment operation) and business aspect (incrementing the counter) are of different nature, and would be better kept separated. This would ease testability, simplify code understanding and interaction.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://stefanoborini.com/book-modelviewcontroller/01-basics-of-mvc/01-smart-ui.html">Stefano Borini on Smart-UI<a>
    </ul>
</section>

<?php
include 'template/footer.php';
