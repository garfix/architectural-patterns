<?php
include 'template/data.php';
$title = "Home";
include 'template/header.php';
?>

<section class="home-section">
    <img src="images/pattern-image.drawio.png" class="pattern-image" />

    <header class="content">
        <h1>About architectural patterns</h1>
    </header>
    <p>
        In playing games, management, and warfare we can distinguish three levels of analysis: operational, tactical, and strategic. In software development we could associate these with <a href="https://en.wikipedia.org/wiki/Structured_programming">structured programming</a>, <a href="https://en.wikipedia.org/wiki/Software_design_pattern">design patterns</a>, and ... <a href="https://en.wikipedia.org/wiki/Architectural_pattern">architectural patterns</a>.
    </p>
    <p>
        Most resources for programmers focus on programming, and a fair amount of information is available on design patterns. This is understandable as this is what we need most of the time. But there can be times that you need to know about architectural patterns as well.
    </p>
    <p>
        I once found myself as a software developer in a position where I was asked to build a new application, a virtual driving instructor. I had no
        idea how to approach this problem. I could just start building classes and functions and hope for the best, but I felt I needed to have an idea of the big picture of the application before I endeavoured the project. If I had the structure wrong, the program could be be arduous to complete and it could become unnecessarily slow. Furthermore, I would have no way to communicate to others about the structure of the application. I needed an architecture, before I started building. But I didn't have any examples to base it upon.
    <p>
        This site is intended to help you in this process. It serves as index to the most well known architectural patterns. They have been used for a wide variety of applications and serve many different purposes. The list continues to grow as new patterns are still being invented. They are meant as a source of inspiration and may be freely adapted and combined. The pages contain just a minimal amount of information to describe and evaluate the pattern. To learn more about them follow the links provides, or do a web-search.
    </p>
    <p>
        After I added the patterns that are usually named architectural patterns, it occurred to me that these were just the most salient ones, and that many other patterns might just as well be added. I have added these more obvious patterns like "logging" and "plugin" in order to remind you of them as you design a new application. Furthermore, I categorized the patterns to make them easier to browse.
    </p>
    <p>
        If you have any ideas or comments to improve this website, don't hesitate to <a href="https://github.com/garfix/architectural-patterns">create an issue or make a pull request</a>.
    </p>
    <p>
        I will leave you with this thought
    </p>
    <blockquote>
        Beauty is more important in computing than anywhere else in technology because software is so complicated. Beauty is the ultimate defense against complexity.
    </blockquote>
    <p>—David Gelernter (in Machine Beauty: Elegance and the Heart of Technology) Found <a target="_blank" href="https://vanderburg.org/etc/quotes/gelernter-beauty/">here</a>.
    </p>
    <p>
        Patrick van Bergen<br>
        Nijmegen, November 2023
    </p>
    <p>
        <center><img src="images/dragon.jpg" /></center>
    </p>

</section>

<?php
include 'template/footer.php';
