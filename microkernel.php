<?php
include 'template/header.php';
?>

<section>
    <header class="content">
        <h1>Microkernel</h1>
    </header>
    <p>The microkernel can serve as a basis for systems that are by nature prone to dramatic changes, like Operating Systems. Think of changing your house. Not just redecorating the walls, or adding a barn. Think of changing the foundation. If your system needs to handle this kind of brutality, consider using a microkernel.</p>
    <p>This architecture is a specialization of a <a href="layers.html">layered system</a>.

    <figure><img src="images/microkernel.jpg"><figcaption>Microkernel architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>The <b>Microkernel</b> contains the absolute minimum functionality of the (Operating) System. It is platform dependent. In an OS, it handles system resources like memory, files, and processes.</p>
    <p>The dynamic platform dependent code of the kernel is implemented in <b>Internal Servers</b>. These are for example the device drivers that steer the hardware directly. They may be loaded and unloaded without rebuilding or even rebooting the (Operating) System.</p>
    <p>While the entire system may be accessed through the Microkernel, it is very Spartan. To ease systems programming, the (Operating) System may contain <b>External Servers</b>. Examples are Memory Management, File System Services, I/O Management Services and other System Services.</p>
    <p>For portability, an extra <b>Adapter</b> is provided. This makes it possible to change an External Server without changing all applications that use it.</p>

   <h2>Examples</h2>
    <ul>
        <li>Minix (see the very interesting <a href="http://www.oreilly.com/catalog/opensources/book/appa.html">discussion</a> on microkernels vs "monolithic systems" between Andrew Tanenbaum (Minix) and Linus Torvalds (Linux).
        <li>Mach
    </ul>

    <h2>Where does it come from?</h2>
    <p>It's a typical Operating System architecture, having come into fruition in the late eighties, early nineties.</p>

    <h2>When should you use it?</h2>
    <p>The architecture contains two adapters. The lower adapter, or Microkernel, hides the hardware specific modules for the developer. The upper adapter, called Adapter, hides the system specific modules for the developer. If your systems contains these types of modules and these are likely to be modified in the future, this architecture may be for you.</p>

    <h2>Problems</h2>
    <p>
    <ul>
        <li>Slower than "monolithic systems".
        <li>More complex to develop for.
    </ul>
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="http://www-courses.cs.uiuc.edu/~cs427/presentations/Nov20/microkernel.ppt">Powerpoint presentation: Microkernel pattern</a>
        <li><a href="http://www.e-words.co.uk/acrobat/post.pdf">Microkernel - from: A System of Patterns - Pattern-Oriented Software Architecture</a>
        <li><a href="http://people.cs.uchicago.edu/~mark/51050/lectures/lecture.6/lecture.6.pdf">Lecture 6: Microkernel and Reflection</a>
    </ul>
</section>

<?php
include 'template/footer.php';
