<?php
include 'template/data.php';
$pattern = $indexed['Conversational Interface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A conversational interface allows users to interact with an application through natural language, either text or speech, using chatbots, voice assistants, or LLM-based agents.</dd>
    </dl>
    <?php showImage($pattern) ?>
    <h2>How does it work?</h2>
    <p>
        The user expresses intent in free text or speech; the system parses the input using natural language understanding (NLU) and maps it to intents and entities, then executes appropriate actions or returns responses.
    </p>
    <p>
        Modern conversational interfaces often leverage large language models (LLMs) to generate contextual and coherent responses, enabling more fluid and human-like interactions.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>When you want to provide a more natural, accessible way for users to interact with the system.</li>
        <li>For handling frequent inquiries or support tasks without human intervention.</li>
        <li>For enabling hands-free or eyes-free operation, e.g., in automotive or industrial settings.</li>
        <li>For providing personalized assistance or recommendations based on conversation history.</li>
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Conversational_agent">Wikipedia on conversational agents</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Chatbot">Wikipedia on chatbots</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Voice_user_interface">Wikipedia on voice user interface</a></li>
    </ul>
</section>

<?php
include 'template/footer.php';
?>