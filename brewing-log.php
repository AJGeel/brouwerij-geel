<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Brouwerij Geel &mdash; Brewing Log</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design, Historic">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <?php include 'links.php' ?>

  </head>
  <body>

    <?php include('nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container brewing-log limit-width">

        <div class="grid">
          <div class="grid--cell">
            <h1 class="brewing-log--title">Brewing Log</h1>
            <p class="paragraph">Welcome to <i>Brouwerij Geel's Brewing Log</i>. On this page you'll find an overview of every single thing we have brewed over the years, including defining characteristics such as <i>Style</i>, <i>Alcohol Percentage</i>, <i>Bitterness</i>, <i>Colour</i> and <i>Clarity</i>.</p>
            <p class="paragraph">For most brews we have created a page where you'll find instructions on how to recreate it. Click on the underlined link on the <i>Brew Name</i> to access these. Cheers! 🍻</p>

          </div>

          <div class="grid--cell stats">
            <div class="stat">
              <p class="number">0</p>
              <h2>Batches Brewed</h2>
            </div>
            <div class="stat">
              <p class="number">0</p>
              <h2>Different Styles</h2>
            </div>
            <div class="stat">
              <p class="number percentage">0</p>
              <h2>Highest ABV</h2>
            </div>
            <div class="stat">
              <p class="number">0</p>
              <h2>Highest IBU</h2>
            </div>
          </div>
        </div>

        <div class="table-wrapper">
          <table class="brewing-log" id="brewingLogTable">
            <thead>
              <tr>
                <th onclick="sortTable(0)">No.</th>
                <th onclick="sortTable(1)">Brew Name</th>
                <th onclick="sortTable(2)">Style</th>
                <th onclick="sortTable(3)">ABV</th>
                <th onclick="sortTable(4)">IBU</th>
                <th onclick="sortTable(5)">SRM</th>
                <th onclick="sortTable(6)">Clarity</th>
                <th onclick="sortTable(7)">Bottle Date</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td>012</td>
                <td>Trust Me, I'm An Engineer</td>
                <td>India Pale Ale</td>
                <td>5.0</td>
                <td>0</td>
                <td>0</td>
                <td>Hazy</td>
                <td>Soon 👀</td>
              </tr> -->
              <tr>
                <td>011</td>
                <td><a href="/recipes/hefeweizen.php">Hefeweizen</a></td>
                <td>Weißbier</td>
                <td>6.0</td>
                <td>15</td>
                <td>4</td>
                <td>Hazy</td>
                <!-- <td>Soon 👀</td> -->
                <td>2020-04-25</td>
              </tr>
              <tr>
                <td>010</td>
                <td><a href="/recipes/ipa-pocalypse.php">IPA&mdash;Pocalypse</a></td>
                <td>India Pale Ale</td>
                <td>7.8</td>
                <td>45</td>
                <td>9</td>
                <td>Slight Haze</td>
                <td>2020-03-19</td>
              </tr>
              <tr>
                <td>009</td>
                <td><a href="/recipes/chateau-jaune.php">Natural Red Wine</a></td>
                <td>Wine</td>
                <td>7.9</td>
                <td>0</td>
                <td>0</td>
                <td>Slight Haze</td>
                <td>2020-02-25</td>
              </tr>
              <tr>
                <td>008</td>
                <td><a href="/recipes/gembier.php">Gembier (V2)</a></td>
                <td>Ginger Beer</td>
                <td>6.2</td>
                <td>0</td>
                <td>0</td>
                <td>Brilliant</td>
                <td>2020-02-25</td>
              </tr>
              <tr>
                <td>007</td>
                <td><a href="/recipes/kiki-cheeky-kriekie.php">Kiki's Cheeky Kriekie</a></td>
                <td>Cider</td>
                <td>5.6</td>
                <td>0</td>
                <td>0</td>
                <td>Clear</td>
                <td>2019-10-21</td>
              </tr>
              <tr>
                <td>006</td>
                <td><a href="/recipes/dry-hopped-cider.php">Dry-Hopped Cider</a></td>
                <td>Cider</td>
                <td>5.3</td>
                <td>0</td>
                <td>2</td>
                <td>Clear</td>
                <td>2019-09-18</td>
              </tr>
              <tr>
                <td>005</td>
                <td><a href="/recipes/gembier.php">Gembier (V1)</a></td>
                <td>Ginger Beer</td>
                <td>2.8</td>
                <td>0</td>
                <td>0</td>
                <td>Clear</td>
                <td>2019-05-24</td>
              </tr>
              <tr>
                <td>004</td>
                <td>Grand Cru</td>
                <td>Amber Ale</td>
                <td>8.1</td>
                <td>27</td>
                <td>30</td>
                <td>Clear</td>
                <td>2019-02-20</td>
              </tr>
              <tr>
                <td>003</td>
                <td>Proto Gembier</td>
                <td>Ginger Beer</td>
                <td>2.2</td>
                <td>0</td>
                <td>0</td>
                <td>Brilliant</td>
                <td>2018-08-04</td>
              </tr>
              <tr>
                <td>002</td>
                <td>Brut Cider</td>
                <td>Cider</td>
                <td>7.5</td>
                <td>0</td>
                <td>2</td>
                <td>Clear</td>
                <td>2018-03-26</td>
              </tr>
              <tr>
                <td>001</td>
                <td><a href="/recipes/toffee-apple.php">Toffee Apple Cider</a></td>
                <td>Cider</td>
                <td>4.5</td>
                <td>0</td>
                <td>10</td>
                <td>Clear</td>
                <td>2017-12-07</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="disqus_thread" class="limit-width">
          <p class="notice">Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></p>
        </div>

        <!-- <table class="brewing-log--more" onclick="alert('Woah woah woah &mdash; hold it for one second. 🤖 \n\nWe\'ve not integrated a database connection yet. This button is merely a placeholder for now.')">
          <tr>
            <td>Show 5 more..</td>
          </tr>
        </table> -->

      </div>


      <?php include('footer.php'); ?>

      <?php include('scripts.php'); ?>

    </main>

  </body>
</html>
