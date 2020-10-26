<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Brouwerij Geel &mdash; Nano-Brewery from Utrecht</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <?php include '../../links.php' ?>

    <style media="screen">
      #tempMeasured::after {
        content: ('°C');
      }
    </style>

  </head>
  <body>

    <?php include('../../nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container limit-width">
        <div class="tool__breadcrumbs">
          <p><a href="/tools/">Tools</a></p>
          <p>Hydrometer Temperature Correction</p>
        </div>

        <div class="tool__wrapper tool__hydro-temp">
          <div class="tool__description">
            <h2 class="tool__header">Hydrometer Temperature Correction</h2>
            <p>This tool helps you correct specific gravity readings, taking into account the temperature at which the hydrometer was calibrated. For this calculator you'll need three measurements: <i>your hydrometer reading</i>, <i>the temperature of the sample</i> and <i>the calibration temperature of your hydrometer</i>.</p>
            <p>Generally, hydrometers are calibrated at 20&deg;C &mdash; but it can be freely adjusted. It'll even be saved for the next time you visit this page!</p>
          </div>
          <div class="tool abv-calculator">
            <div class="abv-calculator__row">
              <label for="inputOG">Hydrometer reading:</label>
              <input type="number" name="OG" id="gravMeasured" value="1.010" step="0.001" min="0.900" max="1.200" onchange="test()" autofocus>
            </div>
            <div class="abv-calculator__row">
              <label for="inputFG">Temperature (&deg;C):</label>
              <input type="number" name="FG" id="tempMeasured" value="25" step="0.1" min="0" max="70" onchange="test()">
            </div>
            <div class="abv-calculator__row">
              <label for="inputFG">Calibration temperature (&deg;C):</label>
              <input type="number" name="FG" id="tempCalibrated" value="20" step="0.1" min="0" max="70" onchange="test()">
            </div>
            <div class="abv-calculator__row">
              <label for="">Adjusted value:</label>
              <p id="abv" title="ABV estimated through measurements of original- and final specific gravities.">0.00</p>
            </div>
          </div>
        </div>

      </div>

      <?php include('../../footer.php'); ?>

    </main>

    <script type="text/javascript">

    function test() {
      console.log('hello world');
    }

    </script>

    <?php include('../../scripts.php'); ?>

  </body>
</html>
