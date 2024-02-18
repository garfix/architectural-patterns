<?php
include 'template/data.php';
$pattern = $indexed['Microkernel'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>Wrap core system resources in a small component, that rarely changes.</dd>
    </dl>

    <p>
        The microkernel is used primarily in operating systems, but the <b>kernel</b> concept of encapsulating system resources is also used by web frameworks.
    </p>

    <figure><img src="images/microkernel.drawio.png"><figcaption>Microkernel architecture diagram</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        The <b>Microkernel</b> contains the absolute minimum functionality of the (Operating) System. It is platform dependent. In an OS, it handles system resources like memory, files, and processes.
    </p>
    <p>
        The dynamic platform dependent code of the kernel is implemented in <b>Internal Servers</b>. These are for example the device drivers that steer the hardware directly. They may be loaded and unloaded without rebuilding or even rebooting the (Operating) System.
    </p>
    <p>
        While the entire system may be accessed through the Microkernel, it is very Spartan. To ease systems programming, the (Operating) System may contain <b>External Servers</b>. Examples are Memory Management, File System Services, I/O Management Services and other System Services. For portability, an extra <b>Adapter</b> is provided. This makes it possible to change an External Server without changing all applications that use it.</p>

   <h2>Examples</h2>
    <ul>
        <li>Operating systems: Minix, Mach, Symbian OS
        <li>Web frameworks: for example Symfony (PHP)
    </ul>

    <h2>When should you use it?</h2>
    <p>
        The microkernel can serve as a basis for a system that has a wide range of different applications, like operating Systems and web frameworks. It's good to provide common functionality in a single place, to reduce duplication and control shared resources.
    </p>

    <h2>Problems</h2>
    <ul>
        <li>The extra layers can cause overhead and loss of flexibility and performance
    </ul>

    <h2>Links</h2>
    <ul>
        <li><a href="https://www.viralpatel.net/microkernel-architecture-pattern-apply-software-systems/">Microkernel Architecture Pattern & Applying it to Software Systems</a>
        <li><a href="https://en.wikipedia.org/wiki/Microkernel">Wikipedia on Microkernel</a>
        <li>Very interesting <a href="http://www.oreilly.com/catalog/opensources/book/appa.html">discussion</a> on microkernels vs "monolithic systems" between Andrew Tanenbaum (Minix) and Linus Torvalds (Linux).
    </ul>
</section>

<?php
include 'template/footer.php';
