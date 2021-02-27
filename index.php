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
    <?php include 'components/ascii-biertje.php'; ?>

  </head>

  <body>

    <?php include('nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container splash">

        <div class="splash-image" alt="Our brewing heroes"></div>
        <div class="splash-text">
          <h2>Why, hello there!</h2>
          <p>We are an independent nano-brewery based in Utrecht, the Netherlands. At Brouwerij Geel, we're interested in brewing <i>The Good Stuff&trade;</i> ranging from <i>craft beers</i> to <i>ciders &amp; wine</i>.</p>
          <p>At this point in time, we have no plans to sell the things we brew. This may change in the future, who knows&hellip;</p>
        </div>

      </div>

      <style>

      .scene {
        height: 0;
        width: 100%;
        padding-top: 120%; /* 500x600 image expected: 6/5 = 120% */
        background-color: white;
        background-repeat: no-repeat;
        background-size: contain;
      }

      </style>

      <div class="container behind-the-scenes limit-width">
        <div class="scene" style="background-image: url('https://source.unsplash.com/500x600/?brewery')">
          <!-- <img src="https://source.unsplash.com/500x600/?brewery" alt="Placeholder image" style="min-height: 486px"> -->
        </div>
        <div class="scene" style="background-image: url('https://source.unsplash.com/500x600/?beer')">
          <!-- <img src="https://source.unsplash.com/500x600/?beer" alt="Placeholder image" style="min-height: 486px"> -->
        </div>
        <div class="scene" style="background-image: url('https://source.unsplash.com/500x600/?humulus')">
          <!-- <img src="https://source.unsplash.com/500x600/?humulus" alt="Placeholder image" style="min-height: 486px"> -->
        </div>
      </div>

      <?php include('other-brews.php'); ?>

      <?php include('footer.php'); ?>

      <?php include('scripts.php'); ?>

    </main>

  </body>
</html>
