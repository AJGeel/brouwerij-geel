<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Brouwerij Geel &mdash; Gembier Recipe</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <?php include '../links.php' ?>
  </head>
  <body>

    <?php include('../nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container">

        <section class="recipe hero outlined limit-width">
          <div class="hero--left">
            <p class="category">Beer / Craft Beer</p>
            <p class="publish-date">February 25<sup>th</sup>, 2020</p>
            <h1 class="brew-name">Gem&shy;bier</h1>
            <p class="brew-description">Sweet. Sour. Spicy. <i>Gembier</i> is a <i>Ginger Ale's</i> more interesting, alcoholic brother. <i>Gembier</i> is a very affordable and accessible brew, and makes for a great introduction to homebrewing. This naturally flavoured- and naturally carbonated brew only calls for five ingredients: <i>Ginger</i>, <i>Sugar</i>, <i>Lemon</i>, <i>Water</i>, and a wee bit of patience.</p>
            <p class="brew-description">A shout-out goes out to <a target="_blank" href="https://www.youtube.com/watch?v=LqPko6a3Wh4">Joshua Weissman</a>, whose 2018 video inspired this recipe.</p>
            <button class="call-to-action" type="button" name="call-to-action" onclick="location.href='#recipe'"><span>Check out the Recipe &rarr;</span></button>
          </div>
          <div class="hero--right">
            <img class="brew-label" src="../i/labels/gembier.jpg" alt="Brew label" onclick="location.href='#recipe'">
          </div>
        </section>

        <article class="recipe limit-width" id="recipe">
          <section class="ingredients outlined">
            <h2>Ingredients*</h2>
            <p class="batch-size">* This recipe results in a batch of &nbsp;( <span class="newAmount active" id="amount_3.8">3.8</span> / <span class="newAmount" id="amount_10">10</span> / <span class="newAmount" id="amount_20">20</span> )&nbsp; liters.</p>
            <h3>Fermentables</h3>
            <ul>
              <li><span class="amount">500</span> g of Granulated Sugar</li>
              <li><span class="amount">100</span> g of Shredded Ginger</li>
            </ul>

            <h3>Hops &amp; Aromatics</h3>
            <ul>
              <li><span class="amount">2</span> Lemons</li>
            </ul>

            <h3>Yeast (Ginger Bug)</h3>
            <ul>
              <li>25 g of Grated Ginger</li>
              <li>25 g of Granulated Sugar</li>
            </ul>

            <!-- <button class="call-to-action" onclick="toggleNavBar();"><span>Show Nav</span></button> -->

          </section>

          <section class="instructions">
            <h2>Here's how it's done.</h2>
            <div class="phase" id="preface">
              <h3 onclick="location.href='#preface'">Preface</h3>
              <p><i>Brewing</i> is a craft that revolves around on <i>Planning</i> and <i>Sanitation</i> &mdash; make sure you have all ingredients and equipment ready and sanitised: this will save you a lot of headaches later on.</p>
              <p>However, <i>Brewing</i> is also about <i>Experimentation</i> and <i>Enjoying Yourself</i>. As a wise man once said: <i class="quote"><a href="https://en.wikipedia.org/wiki/Charlie_Papazian" target="_blank">Relax. Don't worry. And have a homebrew</a></i>.</p>
            </div>

            <div class="phase" id="ginger-bug">
              <h3 onclick="location.href='#ginger-bug'">The Ginger Bug &mdash; [1/4]</h3>
              <p>Ginger has natural yeasts present on its skin &mdash; we'll be cultivating this into a <i>Ginger Bug</i> which we later use to bless ourselves with alcohol. This process will take us two to three days. Don't worry: it's hardly any work at all.</p>
              <ul>
                <li>Fill a mason jar with 500ml of room-temperature water, and add in 25 grams of granulated sugar.</li>
                <li>Use a grater or kitchen knife to couresly grate 25 grams of ginger. Remember to leave the skin on. Add the grated ginger to the mason jar, and use a wooden or plastic spoon to stir.</li>
                <li>Cover the mason jar with a cheese-cloth or a paper towel, and let the jar sit in room temperature for 24 hours.</li>
                <li>The next day, add an additional 25 grams of grated ginger and 25 grams of granulated sugar. Stir to combine.</li>
                <li>Keep repeating this until you see tiny bubbles appear in your liquid and it starts to smell of alcohol &mdash; this means your <i>Ginger Bug</i> is alive and ready for action!</li>
              </ul>
            </div>

            <div class="phase" id="boil">
              <h3 onclick="location.href='#boil'">The Boil &mdash; [2/4]</h3>
              <p>During <i>The Boil</i> we prepare the <i>Wort</i> for <i>The Fermentation Phase</i> by making sure all fermentable materials are mixed well in our liquid.</p>
              <ul>
                <li>Grab a pot that can hold at least <span class="amount">5</span> liters, and place it on your stove. Pour <span class="amount">3.8</span> liters of water in the pot, and turn on the stove.</li>
                <li>Add <span class="amount">500</span> grams of granulated sugar, and peel- and shred around <span class="amount">100</span> grams of ginger. Add these to the pot too.</li>
                <li>Bring the pot up to a rolling boil, then lower the temperature. Let the liquid simmer for <i>Five to Ten</i> minutes. Turn off the heat afterwards.</li>
              </ul>
            </div>

            <div class="phase" id="fermentation">
              <h3 onclick="location.href='#fermentation'">The Fermentation &mdash; [3/4]</h3>
              <p>During <i>The Fermentation</i> we use our own cultivated yeast <i>(Mr. Ginger Bug)</i> to turn the <i>Wort</i> into <i>Ginger Beer!</i> For this to happen, two things are crucial: <i>Sanitation</i> and <i>Temperature Control</i>.</p>
              <ul>
                <li>Make sure anything that (indirectly) touches the <i>Wort</i> from now on is <i>sanitised!</i></li>
                <li>Cool the <i>Wort</i> (in an ice bath, or using a <i>Wort Cooler</i>) until it reaches 21°C.</li>
                <li>Use a <i>Racking Cane</i> to siphon your cooled-down <i>Wort</i> into your sanitised <i>Fermentation Vessel</i>.</li>
                <li>Filter out the particles in your <i>Ginger Bug</i> and add it to the <i>Fermentation Vessel</i>.</li>
                <li><i>Pitch</i> your <i>Yeast</i> (or <i>Yeast Starter</i> if you are fancy 🎩).</li>
                <li><i>Aerate</i> (introduce oxygen) the <i>Wort</i> and <i>Yeast</i> by thoroughly shaking the <i>Fermentation Vessel</i> while closing the top.</li>
                <li>Sanitise- and assemble your screw-stop stopper with an airlock filled with sanitiser liquid. Store the fermenter in a dark place at room temperature.</li>
              </ul>

              <div class="intermezzo">
                <!-- <img src="https://placehold.it/40x40" alt=""> -->
                <svg id="clock-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><title>Artboard 1</title><rect x="33.3" y="73.6" width="8.86" height="2.21" transform="translate(-45.87 70.66) rotate(-60.43)"/><rect x="23.4" y="63.82" width="8.85" height="2.21" transform="translate(-28.98 22.94) rotate(-30.34)"/><rect x="36.31" y="23.86" width="2.21" height="8.85" transform="translate(-9.17 22.79) rotate(-30.37)"/><rect x="49.85" y="73.78" width="2.21" height="8.86" transform="translate(-0.52 0.34) rotate(-0.38)"/><rect x="26.55" y="33.75" width="2.21" height="8.85" transform="translate(-19.2 43.39) rotate(-60.43)"/><rect x="19.58" y="50.24" width="8.86" height="2.21" transform="translate(-0.21 0.1) rotate(-0.23)"/><rect x="62.64" y="70.29" width="2.21" height="8.86" transform="translate(-28.57 41.2) rotate(-29.58)"/><path d="M80.81,21.34A42.53,42.53,0,1,0,20.67,81.48,42.53,42.53,0,0,0,80.81,21.34Zm1,28.92v2.21l-8.86,0V50.22ZM77.13,35,78.22,37l-7.7,4.37-1.09-1.92ZM65.35,23.91,67.25,25l-4.47,7.64-1.91-1.12ZM76.71,77.38a36.73,36.73,0,1,1-26-62.7H51V51.41L82.42,70A37,37,0,0,1,76.71,77.38Z"/></svg>
                <p><span>Intermezzo:</span> Keep in a dark place at room temperature for <i>one week</i>, until the fermentable sugars have been converted into alcohol. That's the brew day done for now! Time to relax and have a pint 🍻.</p>
              </div>
            </div>

            <div class="phase" id="bottling">
              <h3 onclick="location.href='#bottling'">Bottling &mdash; [4/4]</h3>
              <p>Our final step in this journey. In the <i>Bottling</i> phase we &hellip; bottle our brew. For this step, make sure you have sanitised bottles, and a way to close them off (using bottle caps, or swing-top bottles).</p>
              <ul>
                <li>Take off the screw-top stopper from the fermentation vessel, and siphon your <i>(now alcoholic)</i> ginger beer into a sanitised bottling bucket.</li>
                <li>We want our brew to be properly carbonated. This can be done by adding some extra sugar <i>(Priming)</i>. Warning: do not overprime your beer, you'll end up with dangerous bottle bombs!</li>
                <li>As a rule of thumb, add <i>~7.90 g</i> of sugar per liter of homebrew. For this recipe, this means we add a total of <i><span class="amount">30</span> grams</i> of sugar to the bottling bucket.</li>
                <li>Allow the sugar to dissolve in the bottling bucket, and siphon your brew from the bucket into your bottles.</li>
                <li>Make sure the bottles are securely shut, and store them in a dark place for one to two weeks. Place them in the fridge the night before you want to enjoy them. Cheers! 🍻</li>
              </ul>
            </div>

            <div class="phase" id="stats">
              <h3 onclick="location.href='#stats'">Stats for Nerds</h3>
              <p>Finally, here are some statistics that brewing nerds would appreciate. Keep in mind these have been measured using homebrewing equipment, and may not be lab-accurate.  If you managed to get your hands on a bottle of this brew, we would recommend you experience it using <a target="_blank" href="https://www.craftbeer.com/wp-content/uploads/CB_Food_Course/resources/BeerTastingSheet.pdf">this tasting sheet</a>!</p>

              <table>
                <tr>
                  <th>Initial Specific Gravity (OG)</th>
                  <td>1.060</td>
                  <!-- Values: (0.990, 1.075+) -->
                </tr>
                <tr>
                  <th>Final Specific Gravity (FG)</th>
                  <td>1.012</td>
                  <!-- Values: (0.990, 1.075+) -->
                </tr>
                <tr>
                  <th>Alcohol By Volume (ABV)</th>
                  <td>6.2%</td>
                  <!-- Values: (0%, 67.5%+) -->
                </tr>
                <tr>
                  <th>Bitterness (IBU)</th>
                  <td>0</td>
                  <!-- Values: (0, 100+) -->
                </tr>
                <tr id="srmRow">
                  <th>Colour (SRM)</th>
                  <td id="srm">0</td>
                  <!-- Values: [0, 40+) -->
                </tr>
                <tr id="hazy">
                  <th>Clarity</th>
                  <td id="haziness">Clear</td>
                  <!-- Values: (Brilliant, Clear, Slight Haze, Hazy) -->
                </tr>
              </table>
            </div>


          </section>

        </article>
      </div>

      <div id="disqus_thread" class="limit-width">
        <p class="notice">Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></p>
      </div>

      <?php include('../other-brews.php'); ?>
      <?php include('../footer.php'); ?>

    </main>

    <?php include('../scripts.php'); ?>

  </body>
</html>
