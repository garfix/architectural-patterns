<?php
include 'template/data.php';
$pattern = $indexed['Localization'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Allow the user to switch between locales</dd>
    </dl>

    <figure><img alt="" src="images/i18n.drawio.png"><figcaption>Internationalization</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Internationalization is the process of designing a software application so that it can be adapted to various languages and regions without engineering changes. Localization is the process of adapting internationalized software for a specific region or language by translating text and adding locale-specific components.
    </p>
    <p>
        A locale is a combination of language and country. For example, en_GB stands for British English, while en_US is American English.
    </p>
    <p>
        Internationalization means that every text label (i.e. "Customers") is marked as translatable (for example: _("Add customer"), $t("Add customer"), _("add_customer"), _("t42344444")). The text argument serves as the source text.
    </p>
    <p>
        As the code is executed, the application searches for a translation of the source text in the translations of the current locale, and shows the translations that matches the source text.
    </p>

    <h2>When should you use it?</h2>
    <p>
        When the stakeholders require that the application needs to be available in different languages.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>If internationalization is added late into the application development process, it may require significant adaptations. Best start early.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Internationalization_and_localization">Wikipedia on internationalization and localization</a>
    </ul>
</section>

<?php
include 'template/footer.php';
