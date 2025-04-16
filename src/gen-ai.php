<?php
include 'template/data.php';
$pattern = $indexed['Generative AI'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Use a model that is trained on a large amount of human information to produce similar but new information, guided by text prompts.</dd>
    </dl>

    <figure><img src="images/gen-ai.drawio.png"><figcaption>Generative AI</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Transformer-based AI models are trained to recognize patterns in large amounts of text, and associations between text and images or videos. With this neural-net based information it is possible to tell the model to produce more similar output, based on an input of just text (prompt).
    </p>

    <h2>Examples</h2>
    <ul>
        <li>LLM, Large Language Model (ChatGPT, Claude)
        <li>Image (Dall-E)
        <li>Video (SORA)
        <li>OpenAI LangChain / LangGraph
    </ul>

    <h2>When should you use it?</h2>
    <p>
    Gen AI is useful in application development, but we're mainly focusing here on the use of Gen AI as part of the application itself. Such an application can
    </p>
    <ul>
        <li>Act as a customer support chatbot, virtual agent, or shopping assistent
        <li>Do text summarization and content creation for marketing, health care, and news media
        <li>Text translation
        <li>Fraud detection and compliance
        <li>Do text/document retrieval based on a description rather than just text matching (also for private client documents, using RAG (Retrieval Augmented Generation))
        <li>Help a developer write better code and design an application
        <li>Perform simple database queries
        <li>Act like a software agent, using text prompts in stead of function calls
        <li>Multiple Gen AI agents can work together as a multi agent system to perform business tasks
    </ul>

    <h2>Problems</h2>
    <ul>
        <li>A Gen AI agent isn't deterministic: it acts differently next time (although it can be fixed)
        <li>Programming a computer using natural language less precise than using a programming language
        <li>Telling a Gen AI agent what to do is slower than doing it directly, and much more expensive
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Generative_artificial_intelligence">Wikipedia: Genrative Artificial Intelligence<a>
        <li><a href="https://martinfowler.com/articles/gen-ai-patterns/">Emerging Patterns in Building GenAI Products</a>
    </ul>
</section>

<?php
include 'template/footer.php';
