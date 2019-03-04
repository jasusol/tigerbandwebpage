<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tenor Saxophone Section | Tiger Band</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="The Band That Shakes the Southland">
    <meta name="keywords" content="tiger, band, clemson, university, shakes, southland">
</head>

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
    <a href="/join/">Join</a>
    <a href="/bands/">Bands</a>
    <a href="/organizations/">Organizations</a>
    <a href="/staff/">Staff</a>
    <a href="/sections/" class="active">Sections</a>
    <a href="/contact/">Contact</a>
</nav>

<body>
  <div class="section-heading tenors">
    <h1>Tenor Saxophones</h1>
    <img src="https://res.cloudinary.com/dnglix0tu/image/upload/v1551314058/header-high.jpg">
  </div>

  <div class="section-quote tenors">
    <p>Welcome to the Tenor Saxes!</p>
    <p>&mdash; Devin Lane</p>
  </div>

  <div class="heading">
      <h4>Section Leaders</h4>
  </div>

  <div class="section-leaders-content">
    <div class="section-leader">
      <img class="section-leader-photo" src="https://res.cloudinary.com/dnglix0tu/image/upload/v1551314316/devin-lane-high.jpg">
      <h3>Devin Lane</h3>
      <p>Sophomore | Electrical Engineering <br/>Blue Ridge, SC</p>
    </div>
  </div>

  <div class="heading section-pages">
      <h4>Traditions</h4>
  </div>

  <div class="media-container">
    <video autoplay loop muted>
      <source src="https://res.cloudinary.com/dnglix0tu/video/upload/v1551558987/Tenor_Sax_Section_Page_Video.mp4" type="video/mp4">
    </video>
  </div>

  <div class="section-traditions">
    <div class="tradition-tile">
      <img src="/img/sections/tenor-saxes/gameday-hats.jpg">
    </div>
    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Gameday Hats</h4>
        <p>It’s a tenor sax tradition to wear propellor hats to every game day practice. This helps add to the game day spirit, definitely distinguishes our section, and makes those early morning practices much more fun and entertaining!</p>
      </div>
    </div>

    <div class="tradition-tile">
      <div class="tradition-text">
        <h4>Section Culture</h4>
        <p>The best aspect of the tenor sax section is unity among diversity. Each member of the section has a different background and unique personality, but this is a good thing. It adds to the atmosphere of the section, teaches you how to work well with others, and makes everything much more interesting. Even though we all have our own personalities, we work together to better ourselves and each other.</p>
      </div>
    </div>
    <div class="tradition-tile">
      <img src="/img/sections/tenor-saxes/culture.jpg">
    </div>
  </div>

  <div class="media-container tenors">
    <img src="https://res.cloudinary.com/dnglix0tu/image/upload/v1551313987/section-photo-high.jpg">
  </div>

  <div class="auditionButton">
      <a href="/join/winds/" class="boxWrapper">
          <div id="auditionToday" class="boxUIelement rect tenors">
              <div class="textContainer">
                  <p>Join the Tenor Saxes!</p>
              </div>
          </div>
      </a>
  </div>

<!--- FOOTER --->

<?php
    readfile("../../footer.html");
?>
</body>

</html>