<?php
include 'template/data.php';
$pattern = $indexed['Lifecycle Hooks'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>The framework allows the application to hook into the state transitions of a component with custom functions</dd>
    </dl>

    <figure><img src="images/lifecycle-hooks.drawio.png"><figcaption>Lifecycle Hooks</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        This is mostly a GUI pattern that is provided by the frontend framework. Each component is created, mounted, unmounted, destroyed, among others. The application can hook into these transitions with custom functions.
    </p>

    <h2>Examples</h2>
    <ul>
        <li>Vue, React, Angular
    </ul>

    <h2>When should you use it?</h2>
    <ul>
        <li>To load data from the server
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://vuejs.org/guide/essentials/lifecycle.html">Vue<a>
        <li><a href="https://legacy.reactjs.org/docs/hooks-overview.html">React<a>
        <li><a href="https://angular.io/guide/lifecycle-hooks">Angular<a>
    </ul>
</section>

<?php
include 'template/footer.php';
