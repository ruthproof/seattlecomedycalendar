<?php

/*
  Here's the landing page for Seattle Comedy calendar

  It is divided into three parts:

    Subtitles

    Logic

    HTML
*/

$subtitlesArray = [];

array_push($subtitlesArray, 'Finally. I’m tired of wandering into establishments and having to shout “Is there comedy and if not now when!?"');

array_push($subtitlesArray, 'If only finding comedy was as easy as finding overpriced coffee or marijuana. Well guess what, chuckleheads, today is your day for comedic enlightenment and ha ha prognostications.');

array_push($subtitlesArray, 'This is the Seattle Comedy Calendar. The Calendar of Comedy in (and around) Seattle.');

array_push($subtitlesArray, 'Herein, chronologically, are predetermined events - dates (Gregorian), times (UTC-8:00), locations (DMS / Merchant), and descriptions (subjective) - in which one may exchange capital (unless otherwise stated) for admission to theatrical performances conceived and performed with the express intent to induce repetitive laughter in residents of, or guests to, the greater Seattle metropolitan area.');

array_push($subtitlesArray, 'You know how you got that one calendar a few years back that had all sorts of funny pictures and stuff on them, and you hung it in your cubicle and all of your co-workers would walk by all day saying "Wow, that\'s a very funny calendar, Karen!" Well, this here\'s a funny calendar of a DIFFERENT sort!<br><br>' . 'Haha!<br><br>' . 'Hi, I\'m Morgan Dusatko, creator of this comprehensive Seattle comedy calendar. Scroll through days, weeks, months and find out where you can find laughter on any given day in the Seattle-area of Washington state!');

array_push($subtitlesArray,
'Knock Knock.<br><br>'
. 'Who\'s There?<br><br>'
. 'The Seattle Comedy Calendar.<br><br>'
. 'The Seattle Comedy Calendar who?<br><br>'
. 'The Seattle Comedy Calendar. A calendar that has times and locations of where comedy happens.<br><br>'
. 'In Seattle. ...On... a calen... a calendar.<br><br>');

array_push($subtitlesArray, 'Can’t find something to do tonight?<br><br>' . 'That’s a tragedy!<br><br>' . 'Here’s some comedy for you!');

array_push($subtitlesArray, 'The Seattle Comedy Calendar is the indisputable leader in aligning your life with hilarity and joy. All other comedy calendars are garbage and will only lead to disappointment.');

array_push($subtitlesArray, 'The Seattle Comedy Calendar is good for finding comedy in Seattle and possibly also Burien.');

array_push($subtitlesArray, 'Tired of having to call your cousin in St. Louis to hear about comedy shows in Seattle? Us too! The Seattle Comedy Calendar has all the hottest shows in Seattle so you never have to talk to Kevin again.
');


$random = array_rand($subtitlesArray);
$subtitle = $subtitlesArray[$random];

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>

    Seattle Comedy Calendar
  </title>
  <link rel="stylesheet" href="style.css">
  <style>

          h1 {
            text-align: center;
            margin: auto;
            width: 80%;
            color:<?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>;
            -webkit-text-stroke-width: 0.25px;
            -webkit-text-stroke-color: black;
          }

          h3 {
            text-align: center;
            text-justify: inter-word;
            margin: auto;
            width: 60%;
          }

          footer {
            text-align: center;
          }

          .iframe {
          margin: auto;
          width: 80%;
          border: 3px solid green;
          padding: 10px;
          display: flex;
          align-items: center;
          justify-content: center }
          }


  </style>
</head>
<body>

<h1>Seattle Comedy Calendar</h1>
<br>
<?php
echo '<h3>' . $subtitle . '</h3>';
?>
<iframe class="iframe" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FLos_Angeles&amp;src=Z3BsZ2QydTQxZTV1ZHVxcW82dmpkb2R1OHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23515151&amp;mode=WEEK&amp;showCalendars=0&amp;showTz=0&amp;showPrint=0&amp;showTitle=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no" align="middle"></iframe>

<footer>
  Copyright (&copy) 2019
</footer>

</body>
</html>
