<!DOCTYPE html>
<html>
<head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8965430-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-8965430-3');
  </script>

    <meta charset="utf-8">
    <title>Join | Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<?php
    include('../header.php');
    echo getHeader('join');
?>

<!--- PAGE CONTENT --->

<body>
    <!--- MAIN PHOTO --->

    <div class="joinFullscrContainer">
        <div id="screenShade" class="animate"></div>
    </div>

    <div class="fullpageTitle join">
        <h2>Join</h2>
        <h1>Tiger Band</h1>
    </div>

    <!--- AUDITION INFORMATION UI --->

    <div class="heading">
        <h4>Audition Information</h4>
    </div>
    <div id="auditionBoxUI">
        <a href="/join/winds/" class="boxWrapper">
            <div id="inlineBox1" class="boxUIelement sq white">
                <div class="textContainer">
                    <p>Winds</p>
                </div>
            </div>
        </a>

        <a href="/drumline/video_auditions/" target="_blank" class="boxWrapper">
            <div id="inlineBox2" class="boxUIelement sq white">
                <div class="textContainer">
                    <p>Percussion</p>
                </div>
            </div>
        </a>

        <a href="guard/" class="boxWrapper">
            <div id="inlineBox3" class="boxUIelement sq orang">
                <div class="textContainer">
                    <p>Color Guard</p>
                </div>
            </div>
        </a>

        <a href="dancers/" class="boxWrapper">
            <div id="inlineBox4" class="boxUIelement sq orang">
                <div class="textContainer">
                    <p>Dancers</p>
                </div>
            </div>
        </a>

        <a href="twirlers/" class="boxWrapper">
            <div id="inlineBox5" class="boxUIelement sq orang">
                <div class="textContainer">
                    <p>Twirlers</p>
                </div>
            </div>
        </a>
    </div>

    <div class="heading">
        <h4>Announcements</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">

          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfM3I7wXoORe61XCOIR7g34lUFvp8RIoHFDJJpS9-ugiZOG2Q/viewform?usp=sf_link" class="boxWrapper" target="_blank">
          <article class="text">
              <h1>2019 High School Senior Day</h1>
                <img class="articleImg" src='/img/SeniorDay2019.jpg'></a>
              <p>On November 16, Tiger Band will invite around 75 lucky high school seniors to find out first hand what it's like to be a member of Tiger Band.</p>
              <p>Students that are chosen to participate will join Tiger Band for their gameday rehearsal, perform at the 90-minutes-before-kick-off concert, march in the parade to the stadium, sit in the stands and play with the band during the game, and even perform on the field in Death Valley when the Tigers take on Wake Forest!</p>
              <p>Space is limited, so please register as soon as possible to receive full consideration.</p>
              <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfM3I7wXoORe61XCOIR7g34lUFvp8RIoHFDJJpS9-ugiZOG2Q/viewform?usp=sf_link">2019 High School Senior Day Registration Form</a></p>
          </article>
          
          <article class="text">
              <h1>Scholarships!</h1>
              <img class="articleImg" src='/img/Horns.jpg'>
              <p>Did you know that any Clemson student, regardless of major, who participates in Tiger Band AND one of our auditioned ensembles in the fall AND spring semesters - Symphonic Band or Jazz Ensemble - will automatically receive a scholarship?  Automatic scholarships range from $400 to $500 per semester.</p>
              <p>Students who have participated in all-state or region band are encouraged to do an in-person audition in the spring of your senior year of high school to try for a larger scholarship amount.</p>
              <p>To schedule a scholarship audition or for any more questions, contact Lee Maiden, the band administrative assistant, at <a href="mailto:lmaiden@clemson.edu">lmaiden@clemson.edu</a> or call the band office at <a href="tel:864-656-3380">864.656.3380.</a>
          </article>


        </div>

        <div id="col1Flex">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScDPzWqHXcaJXTkyfOJhS4NZgz3peMUSawsBo8IIM3Dufx21g/viewform?usp=sf_link/" class="boxWrapper" target="_blank">
                <article class="text">
                    <h1>Sign Up Today</h1>
                    <img class="articleImg" src='/img/CuseAmp.jpg'>
                    <p>Click here to register with Tiger Band and receive information about what it takes to be a member of Tiger Band.</p>
                    <p>You'll get <u><b>EXCLUSIVE</u></b> information and become eligible for <u><b>EARLY REGISTRATION</u></b> to events BEFORE they're released to the public!</p>
                </article>
            </a>

            <a href="/img/2019Preseason.pdf" class="boxWrapper" target="_blank">
                <article class="text">
                    <h1>2019 Preseason Camp Schedule</h1>
                    <img class="articleImg" src='/img/PreseasonCamp2018.jpg'>
                    <p>Click here to view the 2019 Summer Preseason Camp Schedule.</p>
                    <p>We're looking forward to welcoming the 2019 edition of "The Band that Shakes the Southland" to campus. Our pursuit of excellence continues!</p>
                </article>
            </a>
        </div>
    </div>

    <!--- WHY JOIN --->

    <div class="heading">
        <h3>Why Join</h3>
        <h4>Tiger Band?</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="media">
                <h1>Worried about the Time Commitment?</h1>
                <p>Who better to ask about the time commitment involved with Tiger Band than people who are actually in Tiger Band? Hear from Tiger Band students about how they manage their time, school, and other commitments.</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mJwAG1Pv9GU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </article>
        </div>
        <div id="col2Flex">
            <article class="media">
                <h1>Tiger Band travels all over the country</h1>
                <p>One of the biggest perks of being a member of Tiger Band is being able to travel. Students have had the opportunity to travel all over the country at no cost. Don't miss out on these unforgettable experiences!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BvPYw24x4_I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </article>
        </div>
            <div id="col1Flex">
                <article class="media">
                    <h1>Join a family within the larger Clemson community</h1>
                    <p>If the idea of coming to a campus with 26,000 students makes you nervous, Tiger Band can help! You'll be able to move into your dorm a week early, have access to campus before more students get here, and you'll meet 350 friendly, welcoming people with common interests.</p>
                        <div class="iframeContainer">
                        <div class="iFrameAspectRatio">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/7XA7r894um8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                </article>
            </div>
            <div id="col2Flex">
                <article class="media">
                  <h1>Tiger Band Auditions</h1>
                  <p>Don't stress about your Tiger Band audition. With our video auditions, you have plenty of time to put your best foot forward. Hear from current Tiger Band members about what it's like to go through the process.</p>
                      <div class="iframeContainer">
                      <div class="iFrameAspectRatio">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/CZuo9wG0DLE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </article>
            </div>
            <div id="col1Flex">
                <article class="media">
                  <h1>Motivation to succeed</h1>
                  <p>Without weekly competitions, what motivates Tiger Band members to perform at such a high level? Hear from current Tiger Band members about what makes them tick.</p>
                      <div class="iframeContainer">
                      <div class="iFrameAspectRatio">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/Yus7AVArAzY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </article>
            </div>
            <div id="col2Flex">
                <article class="media">
                  <h1>Preseason Camp</h1>
                  <p>Curious about Tiger Band's preseason camp? Learn what it's like to come to campus to prepare for an upcoming season from current Tiger Band members.</p>
                      <div class="iframeContainer">
                      <div class="iFrameAspectRatio">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/P1HyGJ_0150" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </article>
            </div>

    </div>

<!--- FOOTER --->

<?php
    readfile("../footer.html");
?>
</body>

<script type="text/javascript">
    //Copyright Date
    var startYear = 2017;
    var currentYear = new Date().getFullYear();
    if (startYear == currentYear) {
        document.getElementById("copyright").innerHTML = "COPYRIGHT &copy " + startYear;
    }
    else {
        document.getElementById("copyright").innerHTML = "COPYRIGHT &copy " + startYear + " - " + currentYear;
    }
</script>
</html>
