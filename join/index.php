<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Join | Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

<!--- HEADER --->

<input type='checkbox' id='mobileMenu'>

<div id="mobileHeader">
	<a href="/">><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
	<label for="mobileMenu" id="menuButton"><span>=</span></label>
</div>

<label id='mobileScreenShade' for='mobileMenu'></label>

<!--- NAVIGATION --->

<nav>
    <a href="/">Home</a>
    <a href="/this_season/">This Season</a>
    <a href="/join/" class="active">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/organizations/">Organizations</a>
    <a href="/staff/">Staff</a>
    <a href="/members/">Members Only</a>
    <a href="/contact/">Contact</a>
</nav>

<!--- PAGE CONTENT --->

<body>
    <!--- MAIN PHOTO --->

    <div id="joinFullscrContainer">
        <div id="screenShade"></div>
    </div>

    <div id="homepageTitle">
        <h2>Join</h2>
        <h1>Tiger Band</h1>
    </div>

    <!--- AUDITION INFORMATION UI --->

    <div id="heading">
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

        <a href="http://tband.people.clemson.edu/drumline/auditions/" class="boxWrapper">
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

    <div id="heading">
        <h4>Tiger Band Tours</h4>
    </div>

    <section id="content" class="centered">
        <article class="text">
            <h1>Tiger Band Tours</h1>
            <p>If you are planning a campus visit, don't forget to sign up for a Tiger Band Tour to learn first-hand what it's like to be a member of the "Band that Shakes the Southland!"</p>
            <p>Tour our facilities, learn about the history and traditions of the band, and experience a gameday through the eyes of our Tiger Band Ambassadors.</p>
            <p>Tour dates and a link to registration will be coming soon!</p>

        </article>
    </section>

    <!--- WHY JOIN --->

    <div id="heading">
        <h3>Why Join</h3>
        <h4>Tiger Band?</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="media">
                <h1>Are you worried about the Time Commitment?</h1>
                <p>Who better to ask about the time commitment involved with Tiger Band than people who are actually in Tiger Band? Hear from Tiger Band students about how they manage their time, school, and other commitments.</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe class="ytVideo" width="560" height="315" src="https://www.youtube.com/embed/M6AO6dTb4PQ" frameborder="0" allowfullscreen></iframe>
            </article>
        </div>
        <div id="col2Flex">
            <article class="media">
                <h1>Tiger Band travels all over the country</h1>
                <p>One of the biggest perks of being a member of Tiger Band is being able to travel. Students have had the opportunity to travel all over the country at no cost. Don't miss out on these unforgettable experiences!</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe class="ytVideo" width="560" height="315" src="https://www.youtube.com/embed/opYafN6oono" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </article>
        </div>
            <div id="col1Flex">
                <article class="media">
                    <h1>Join a family within the larger Clemson community</h1>
                    <p>If the idea of coming to a campus with 26,000 students makes you nervous, Tiger Band can help! You'll be able to move into your dorm a week early, have access to campus before more students get here, and you'll meet 350 friendly, welcoming people with common interests.</p>
                        <div class="iFrameAspectRatio">
                            <iframe class="ytVideo" width="560" height="315" src="https://www.youtube.com/embed/ROM5CTPXVcI" frameborder="0" allowfullscreen></iframe>
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
