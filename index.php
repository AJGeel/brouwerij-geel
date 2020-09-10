<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Brouwerij Geel &mdash; Nano-Brewery from Utrecht</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <?php include 'links.php' ?>

  </head>

  <!--

              ██████████████  ██
            ██              ██  ██
          ██                    ██
          ██              ████    ████              Checking out the source code, are we?
          ██      ████████░░░░████    ██
          ██    ██░░░░░░░░░░░░██▒▒▒▒▒▒  ██          That's cool. Have a virtual beer on the house.
            ████░░░░░░░░░░░░░░██▒▒██▒▒  ██
            ██░░░░░░░░░░░░░░░░████  ██  ██          < — — 
            ██░░░░░░░░░░░░░░░░██    ██  ██
            ██░░░░░░░░░░░░░░░░██    ██  ██
            ██░░░░░░░░░░░░░░░░██    ██  ██
            ██░░░░░░░░░░░░░░░░████  ██  ██          This website was designed and developed by
            ██░░░░░░░░░░░░░░░░██  ██▒▒  ██
            ██░░░░░░░░░░░░░░░░██  ▒▒▒▒██            Arthur Geel. If you have any questions or comments
            ██░░░░░░░░░░░░░░░░██▒▒▒▒██
            ██░░░░░░░░░░░░░░░░██████                regarding web design/dev and brewing, feel free to @me,
          ██  ██░░░░░░░░░░░░░░██
          ██  ▒▒██████████████▒▒██                  you can do so through hello@arthurgeel.com
            ██  ▒▒▒▒        ▒▒  ██
            ████          ████
                ██████████

  -->


  <body>

    <?php include('nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container splash">

        <div class="splash-image" alt="Our brewing heroes"></div>
        <div class="splash-text">
          <h2>Why, hello there!</h2>
          <p>We are an independent nano-brewery based in Utrecht, the Netherlands. At Brouwerij Geel, we're interested in brewing <i>The Good Stuff&trade;</i> ranging from <i>craft beers</i> to <i>ciders &amp; wine</i>.</p>
          <p>At this point in time, we have no plans to sell the things we brew. This may change in the future, who knows&hellip;</p>
          <!-- <a class="link" href="#" target="_blank">Check out our latest brew</a> -->
          <!-- <p>We are fans of open source brewing. For that reason, we use this site to release <a class="dark-link" href="#!">our recipes</a> for you all to see.</p> -->
        </div>

      </div>

      <div class="container limit-width">
        <div class="splide">
        	<div class="splide__track">
        		<ul class="splide__list">
        			<li class="splide__slide">Slide 01</li>
                <img src="/i/gallery_placeholder.jpg" alt="placeholder">
        			<li class="splide__slide">
              </li>
        			<li class="splide__slide">Slide 03</li>
        		</ul>
        	</div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>

      <!-- <div class="container behind-the-scenes limit-width">
        <div class="scene">
          <img src="https://source.unsplash.com/500x600/?brewery" alt="Placeholder image">
        </div>
        <div class="scene">
          <img src="https://source.unsplash.com/500x600/?beer" alt="Placeholder image">
        </div>
        <div class="scene">
          <img src="https://source.unsplash.com/500x600/?humulus" alt="Placeholder image">
        </div>
      </div> -->

      <?php include('other-brews.php'); ?>

      <?php include('footer.php'); ?>

      <?php include('scripts.php'); ?>

    </main>

  </body>
</html>
