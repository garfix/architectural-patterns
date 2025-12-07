<?php
include 'template/data.php';
$pattern = $indexed['UTC'];
include 'template/header.php';
?>

<section>
    <?php showHeader($pattern) ?>

    <dl>
        <dt>Definition</dt>
        <dd>A standardized representation of time</dd>
    </dl>

    <figure><img alt="" src="images/utc.drawio.png"><figcaption>UTC</figcaption></figure>

    <h2>How does it work?</h2>
    <p>
        Th world has 24 time zones. Each of these zones has a different local time. Some countries use Daylight Savings Time, while others don't. UTC is a means of storing time in a standardized way. Storing all time values in a standard way resolves allows these values to be compared in a simple way.
    </p>
    <p>
        An example:
        <pre>1997-07-16T19:20:30.45+01:00</pre>
    </p>
    <p>
        When local time is used, it's always important to realize that it belongs to a specific locale (with its time zone and dst).
    </p>

    <h2>When should you use it?</h2>
    <p>
        When your application spans multiple time zones, or even just multiple countries, and knowing the exact time of events is relevant.
    </p>

    <h2>Links</h2>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/Coordinated_Universal_Time">UTC</a>
        <li><a href="https://en.wikipedia.org/wiki/Time_zone">Wikipedia on time zone</a>
    </ul>
</section>

<?php
include 'template/footer.php';
