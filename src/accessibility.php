<?php
include 'template/data.php';
$pattern = $indexed['Accessibility'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Design software so people with different physical, sensory, cognitive, and social abilities can use it effectively and comfortably.</dd>
    </dl>
    <?php showImage($pattern) ?>




    <h2>How does it work?</h2>
    <p>
        Accessibility, often shortened to a11y, means making applications usable by as many people as possible, including those with visual, hearing, motor, cognitive, or communication differences. It works by removing barriers in the interface, content, and interaction model so that everyone can understand, navigate, and complete tasks without unnecessary friction.
    </p>

    <h2>Examples</h2>
    <p>
        These examples are web-based
    </p>
    <p>
        Try to solve the issues using semantic HTML. But if that's not possible, add <a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA">ARIA (Accessible Rich Internet Applications)</a> constructs.
    </p>
    <ul>
        <li><b>Low contrast text:</b> make sure your text contrasts with its background. <a href="https://webaim.org/resources/contrastchecker/">Online contrast checker</a>, <a href="https://benmyers.dev/blog/fix-low-contrast-text/">More information</a>
        <li><b>Missing alternative text: </b> add an <i>alt</i> attribute to every img tag that is not purely decorative. The alt text describes the image to the person that can't see it. If no text is needed, create an empty alt-tag ("")
        <li><b>Empty links and buttons:</b> Achor (a) tags without <i>href</i> or <i>title</i> attribute. Buttons without text. These do not tell the visually impaired person what happens when they click on them.
        <li><b>Missing form labels:</b> It's best to wrap each input element in a label element, or link the label to the input using a <i>for</i> attribute.
        <li><b>Missing document language: </b> Set the language of the document: &lt;html lang="en"&gt; (see <a href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">this document</a> for language codes)
    </ul>

    <p>
        General examples
    </p>
    <ul>
        <li>Make the design keyboard-friendly by ensuring it can be navigated through using the tab key.
    </ul>

    <h2>Other forms of accessibility</h2>
    <p>
        Accessibility is not only about visual design. It also includes hearing, movement, speech, attention, language, and memory. A system that looks polished but ignores these needs will still exclude a large number of users. In practice, inclusive design means building experiences that work across different sensory, cognitive, and communication needs, not only across different screen sizes or device types.
    </p>

    <h3>Hearing accessibility</h3>
    <p>
        People who are deaf or hard of hearing may not be able to perceive audio content, especially if it is the only source of information. This includes music, spoken instructions, podcasts, voice messages, and system alerts. In a web or desktop application, audio can be a major source of friction if it is not paired with text or visual alternatives. A good example is a notification that only emits a beep; the user may never know that a task completed, a warning appeared, or a conversation arrived.
    </p>
    <p>
        Solutions include captions for video, transcripts for podcasts and meetings, and visible indicators for sound-based alerts. When a product uses speech synthesis or voice prompts, it should also provide text-based equivalents or a non-audio fallback. Designers should avoid assuming that everyone can hear a warning or understand an audio-only instruction. The same principle applies to multimedia content: if the information is in audio, it should also be represented in another format.
    </p>
    <p>
        Hearing accessibility also has an impact on user trust and usability. A person who cannot hear instructions may still be able to operate a system correctly if the interface has clear text, structured feedback, and visual cues. This is especially important in training systems, emergency notifications, and customer service portals. Accessible design for hearing is often simple to implement and carries high value because it improves clarity for everyone, not only deaf users.
    </p>

    <h3>Motor accessibility</h3>
    <p>
        Motor accessibility concerns users with limited dexterity, tremors, arthritis, repetitive strain injuries, or temporary injuries. These people may struggle with precise pointer movement, dragging, repeated clicks, or rapid interaction patterns. A system that requires fine-grained mouse control or very small targets can be difficult or impossible to use without adaptation. This is a common accessibility issue in interfaces that assume a working keyboard, mouse, or touchpad and do not support alternative input methods.
    </p>
    <p>
        Good motor accessibility starts with large hit areas, consistent spacing, and support for keyboard-only navigation. Tabs, arrow keys, Enter, and Escape should work predictably across the interface. Forms should not require drag-and-drop interactions when standard selection or typing is sufficient. For people using voice input, switch devices, or one-handed controls, interfaces should be operable without constant precision or complex timing.
    </p>
    <p>
        Developers should also avoid forcing users to complete long sequences of timed actions. A simple task like moving a slider or clicking a small menu item should not become a barrier. Accessible motor design improves usability for everyone, including users on laptops, touchscreens, tablets, and assistive devices. When an interface is easy to use with a keyboard or switch device, it is often easier to understand and more robust for all users.
    </p>

    <h3>Cognitive and learning accessibility</h3>
    <p>
        Cognitive accessibility covers differences in memory, attention, reading comprehension, processing speed, executive function, and language ability. People may have dyslexia, ADHD, autism spectrum traits, learning disabilities, or simply find complex interfaces stressful. Many of these users are not “less capable”; they simply need systems that reduce cognitive load and explain themselves clearly. An application that relies on hidden logic, unclear labels, or excessive steps can become frustrating even for users without diagnosed conditions.
    </p>
    <p>
        To improve cognitive accessibility, provide clear language, predictable navigation, and consistent layouts. Avoid unexplained jargon, overloaded screens, and deep chains of modal dialogs. Use short labels, short paragraphs, and straightforward next steps. Help users understand where they are, what to do next, and what is happening without requiring them to remember too much context. Clear error messages and confirmation states also reduce confusion and make it easier to recover from mistakes.
    </p>
    <p>
        Design for cognitive accessibility should also include support for customization. Users may need larger text, reduced animation, a calmer interface, or fewer distractions. Break tasks into manageable steps and avoid requiring people to infer hidden rules. A product that is easier to understand is often better for everyone, especially when the task is important, time-sensitive, or emotionally stressful.
    </p>

    <h3>Speech and communication accessibility</h3>
    <p>
        Speech accessibility addresses users who have difficulty speaking, cannot speak clearly, or rely on alternative communication methods. Some people are nonverbal, have speech disorders, or use assistive technologies such as voice synthesis or text-to-speech. A product that only allows voice input for important tasks may effectively block these users. The same problem appears when a system treats spoken responses as the only valid form of communication, or when it offers no fallback to text, touch, or keyboard input.
    </p>
    <p>
        Effective communication accessibility means offering alternatives. Voice-based commands should be supplemented with buttons, forms, or keyboard controls. Call centers and chat systems should support text, transcripts, and clear visual confirmation. Users should never be forced into a communication method that is not compatible with their needs. This is especially important in public services, customer support, and health-related software where communication quality directly affects safety and reliability.
    </p>
    <p>
        Accessibility is also about respecting different communication styles and reducing unnecessary assumptions. People may communicate with symbols, simplified text, or assistive devices rather than spoken language. When a system allows multiple ways to input and receive information, it becomes more inclusive and often more usable. In practice, accessibility is not a checklist of edge cases; it is a design mindset that values clarity, flexibility, and dignity for all kinds of users.
    </p>

    <h2>When should you use it?</h2>
    <ul>
        <li>Always, because users have different abilities, contexts, and devices, and inclusive design benefits everyone.
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Web_accessibility">Wikipedia on web accessibility</a>
    </ul>

    <h2>Credits</h2>
    <ul>
        <li>Using information from "Easy Accessibility Wins: Better Accessibility in Five Minutes or Less", by Ashleigh Lodge
    </ul>
</section>

<?php
include 'template/footer.php';
