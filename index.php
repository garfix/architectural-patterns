<?php
$title = "Home";
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>About architectural patterns</h1>
    </header>
    <p>
        In playing games, warfare, and management we can distinguish three levels of analysis: operational, tactical, and strategic. In software development we could associate these with <a href="https://en.wikipedia.org/wiki/Structured_programming">structured programming</a>, <a href="https://en.wikipedia.org/wiki/Software_design_pattern">design patterns</a>, and ... <a href="https://en.wikipedia.org/wiki/Architectural_pattern">architectural patterns</a>.
    </p>
    <p>
        Most resources for programmers focus on programming, and a fair amount of information is available on design patterns. This is understandable as this is what we need most of the time. But there can be times that you need to know about architectural patterns as well.
    </p>
    <p>
        I once found myself as a software developer in a position where I was asked to build a new application, a virtual driving instructor. I had no idea how to approach this problem. I could just start building classes and functions and hope for the best, but I felt I needed to have an idea of the big picture of the application before I endeavoured the project. If I had the structure wrong, the program could be be arduous to complete and it could become unnecessarily slow. Furthermore, I would have no way to communicate to others about the structure of the application. I needed an architecture, before I started building. But I didn't have any examples to base it upon.
    <p>
        This site is intended to help you in this process. It serves as index to the most well known architectural patterns. They have been used for a wide variety of applications and serve many different purposes. The list continues to grow as new patterns are still being invented. They are meant as a source of inspiration and may be freely adapted and combined. I hope you enjoy them.
    </p>
    <p>
        If you have any ideas or comments to improve this website, don't hesitate to <a href="mailto:patrick.vanbergen@gmail.com">mail me</a>. I will leave you with this thought
    </p>
        <blockquote>
            Beauty is more important in computing than anywhere else in technology because software is so complicated. Beauty is the ultimate defense against complexity.
        </blockquote>
    <p>—David Gelernter (in Machine Beauty: Elegance and the Heart of Technology) Found <a target="_blank" href="https://vanderburg.org/etc/quotes/gelernter-beauty/">here</a>.
    <ul class="actions">
        <li><a href="patterns.php" class="button big">To the patterns</a></li>
    </ul>
    <p>
        <center><img src="images/dragon.jpg" /></center>
    <p>

</section>

<?php
include 'template/footer.php';
