<?php include "includes/header.php";?>

<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>
    <!-- SHOW/HIDE MONTH VIEW CALENDAR BASED UPON RESOLUTION -->
    <div class="month-view embed-container">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FLos_Angeles&amp;src=ZG92cWRwOHBwMW05MTYycmE0cDRwNnYyNjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D50000&amp;showTitle=0" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <!-- SHOW/HIDE AGENDA VIEW CALENDAR BASED UPON RESOLUTION -->
    <div class="agenda-view embed-container">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FLos_Angeles&amp;src=ZG92cWRwOHBwMW05MTYycmE0cDRwNnYyNjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D50000&amp;showTitle=0&amp;mode=AGENDA" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    <h2>Upcoming Events</h2>
    <h3>Hamilton the Musical</h3>
    <p>Saturday, May 29 at 2:00 – 4:00 PM PST <br/>
        </p>
    <p>Location: <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x54906ab550f06875:0x6bae683a839fc887?sa=X&ved=2ahUKEwiXgJGgvuTwAhVM6J4KHRW_D4gQqJACegQIARAf" target="_blank">Paramount Theatre</a></p>
        <address>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;911 Pine St, Seattle, WA</address><br>
         <a href="https://www.stereoboard.com/hamilton-tickets/seattle/2021-05-29" target="_blank">More information here</a>
        </aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>

