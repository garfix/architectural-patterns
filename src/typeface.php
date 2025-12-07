<?php
include 'template/data.php';
$pattern = $indexed['Typeface'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A typeface is a styled set of letters, numbers, and characters</dd>
    </dl>
    <p>A typeface is used to display text. It's usually called "font", but a font is actually the file that contains the typeface.</p>

    <figure><img alt="" src="images/typeface.drawio.png"><figcaption>Typeface</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        A typeface needs to be <b>well readable</b> when used for large amounts of texts. Badly readable typefaces can only used for single words, for their decorative effect. Serif fonts have small features at the ends of the strokes. Sans-serif fonts don't have them.
    </p>
    <p>
        There should be a minimal contrast between text color and background color to be readable.
    </p>
    <p>
        Text is normally aligned left, but it may be centered for headlines and captions. Some scripts are naturally written from right to left. Text can be right aligned when it better suits the monetary values in a column.
    </p>
    <h2>Paragraphs</h2>
    <p>
        Use either serif or sans-serif fonts for paragraphs of text. Common typefaces are Helvetica, Arial, Georgia, Times New Roman and Calibri. A font size of 16px is considered a good minimum for readability. A line length of 60 to 80 characters is recommended for readability. A line height of 150% is good for readability in a paragraph.
    </p>
    <h2>User preference</h2>
    <p>
        Users that have difficulty reading small fonts like to set their own preferred font size in your application or browser to <b>larger</b> or <b>extra large</b>. In your application you should work with this selected font size rather than some fixed font size. <b>1rem</b> would result in 16px in a standard browser, but 20px for a browser set to larger. To make a section smaller than the default website font (i.e. 14px instead of 16px), use <b>0.875rem</b> for that section. This makes the font 14px for typical reading users, but larger for users that changed their browser default.
    </p>
    <h2>Headers</h2>
    <p>
        Use a paragraph font or a slab serif font (A slab serif font is a serif font where the serif is squared off). The size is at least a few pixels higher than the paragraph font. Headers may use a line height less than 150%.
    </p>
    <h2>Components</h2>
    <p>
        Use a sans-serif font for text in components.
    </p>
    <h2>Values</h2>
    <p>
        You can use a monospaced font for numbers that need to alined, and for other values. Also for code examples.
    </p>
    <h2>Decorative elements</h2>
    <p>
        Short texts that aim to enliven your site can have any font. Comic sans is considered unprofessional, but may still be used to express playfulness or unseriousness.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://imperavi.com/books/ui-typography/basis/typeface-vs-font/">UI Typography<a>
        <li><a href="https://www.wix.com/blog/how-to-choose-best-fonts-website">20 best fonts for your website<a>

    </ul>
</section>

<?php
include 'template/footer.php';
