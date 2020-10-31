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

  </head>
  <body>

    <?php include('../../nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container limit-width">
        <div class="tool__breadcrumbs">
          <p><a href="/tools/">Tools</a></p>
          <p>Alcohol by Volume (ABV) Calculator</p>
        </div>

        <div class="tool__wrapper tool__abv-calc">
          <div class="tool__description">
            <h2 class="tool__header">Alcohol by Volume (ABV) Calculator</h2>
            <p>This tool helps you find the Alcohol by Volume (ABV) of your brew based on change in specific gravity. If you took hydrometer readings before the fermentation started <i>(Original Gravity: OG)</i> and once it ended <i>(Final Gravity: FG)</i>, you can use a formula to calculate the resulting alcohol.</p>
            <div class="formula">
              <p class="formula__row header">Formula for calculating Alcohol by Volume (ABV, %) </p>
              <p class="formula__row"><span>ABV</span> = (((<span>OG</span> - <span>FG</span>) * <span>M(C<sub>2</sub>H<sub>6</sub>O)</span> ) / <span>FG</span> ) / <span>&rho;(C<sub>2</sub>H<sub>6</sub>O)</span></p>
              <p class="formula__row"><reg>Where</reg><span>M(C<sub>2</sub>H<sub>6</sub>O)</span> = <span>weight of ethyl-alcohol</span> = <span>1.05</span> (const.) ,</p>
              <p class="formula__row"><reg>And</reg><span>&rho;(C<sub>2</sub>H<sub>6</sub>O)</span> = <span>density of ethyl-alcohol</span> = <span>0.79</span> (const.)</p>
            </div>
            <a id="formulaLink" tabindex="0">🤔 Remind me of that formula again...</a>
          </div>
          <div class="tool abv-calculator">
            <div class="abv-calculator__row">
              <label for="inputOG">Original Gravity (OG):</label>
              <input type="number" name="OG" id="inputOG" value="1.050" step="0.001" min="0.900" max="1.200" onchange="updateABV()" autofocus>
            </div>
            <div class="abv-calculator__row">
              <label for="inputFG">Final Gravity (FG):</label>
              <input type="number" name="FG" id="inputFG" value="1.000" step="0.001" min="0.900" max="1.200" onchange="updateABV()">
            </div>
            <div class="abv-calculator__row">
              <label for="">Alcohol by Volume:</label>
              <p id="abv" title="ABV estimated through measurements of original- and final specific gravities.">0.00</p>
            </div>
          </div>
        </div>

      </div>

      <div class="container light-bg">
        <section class="limit-width sm-w100">
          <h2 class="tool__header">Common specific gravity ranges</h2>
          <p class="mw-half">Experimenting is fun and all, but most of the times we just follow recipes &mdash; or at least base our reasoning on existing recipes. The table below contains a number of popular brewing styles and their characteristics. You may click them to transfer their data to the calculator.</p>
          <table class="mt-4 tool-table">
            <thead>
              <tr>
                <th>Brewing Style</th>
                <th>Original Gravity (OG)</th>
                <th>Final Gravity (FG)</th>
                <th>Alcohol by Volume (ABV)</th>
              </tr>
            </thead>
            <tbody>
              <tr onclick="clickTablePreset(this)">
                <td>Pilsener</td>
                <td>1.048</td>
                <td>1.010</td>
                <td>5.0</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>American IPA</td>
                <td>1.070</td>
                <td>1.010</td>
                <td>7.9</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Cidre Brut</td>
                <td>1.045</td>
                <td>0.995</td>
                <td>6.7</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Cidre Doux</td>
                <td>1.050</td>
                <td>1.025</td>
                <td>3.2</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Weißbier</td>
                <td>1.045</td>
                <td>1.014</td>
                <td>4.1</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>English Barleywine</td>
                <td>1.100</td>
                <td>1.018</td>
                <td>10.7</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Imperial Stout</td>
                <td>1.110</td>
                <td>1.025</td>
                <td>11.0</td>
              </tr>

            </tbody>
          </table>
        </section>
      </div>

      <?php include('../../footer.php'); ?>

    </main>

    <?php include('../../scripts.php'); ?>

  </body>
</html>
