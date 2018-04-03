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
	<a href="/"><img id="tbMobileLogo" src="/img/logos/TigerBandMobileLogo.png" width="120"></a>
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
            <p>Register for a free tour today!</p>
            <a class="richLink cta" href="https://www.google.com/forms/about/" target="_blank">Sign-up</a>
        </article>
    </section>

    <!--- WHY JOIN --->

    <div id="heading">
        <h3>Why Join</h3>
        <h4>Tiger Band?</h4>
    </div>

    <div id="Col2FlexContent">
        <div id="col1Flex">
            <article class="text">
                <h1>Sample Article</h1>
                    <img class="articleImg" src='/img/clemson-tiger-band-louisville-2016-345.jpg'>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor. Curabitur vehicula lobortis lacus, id dignissim metus interdum eu. Nam finibus lorem quis nibh pharetra, a facilisis diam mattis. Mauris sed arcu a enim vestibulum sodales. Duis feugiat nisl quam, ac lobortis erat rutrum eget. Nunc ultricies felis consectetur, venenatis risus ac, eleifend quam. Sed eros eros, pulvinar a nisl iaculis, suscipit cursus mi. Duis sodales, justo ut varius blandit, diam nisl vehicula turpis, a viverra nunc ex in enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
            </article>
        </div>
        <div id="col2Flex">
            <article class="media">
                <h1>Sample Media Segment</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut magna tortor.</p>
                <div class="iframeContainer">
                    <div class="iFrameAspectRatio">
                        <iframe class="ytVideo" width="560" height="315" src="https://www.youtube.com/embed/sIAt07BUOoo" frameborder="0" allowfullscreen></iframe>
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
