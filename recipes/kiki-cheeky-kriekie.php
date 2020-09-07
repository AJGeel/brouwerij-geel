<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Brouwerij Geel &mdash; Kiki's Cheeky Kriekie</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <link rel="shortcut icon" href="/i/brouwerij-geel-small.png" type="image/png" id="favicon">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
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

    <?php include('../nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container">
        <section class="hero outlined">
          <div class="hero--left">
            <p class="category">Cider / Craft Cider</p>
            <p class="publish-date">October 21<sup>st</sup>, 2019</p>
            <h1 class="brew-name">Cherry Cider</h1>
            <p class="brew-description">Deep v sartorial cardigan, pour-over DIY brunch flannel keffiyeh raclette shoreditch sriracha. Seitan bicycle rights flexitarian mlkshk, tilde messenger bag live-edge shaman blue bottle VHS coloring book prism woke bespoke. You probably haven't heard of them kombucha yr godard, ugh pickled tbh.</p>
            <button class="call-to-action" type="button" name="call-to-action" onclick="location.href='#recipe'"><span>Check out the Recipe &rarr;</span></button>
          </div>
          <div class="hero--right">
            <img class="brew-label" src="../i/labels/kiki-cheeky-kriekie.jpg" alt="Brew label" onclick="location.href='#recipe'">
          </div>
        </section>

        <article class="recipe" id="recipe">
          <section class="ingredients outlined">
            <h2>Ingredients*</h2>
            <p class="batch-size">* This recipe results in a batch of &nbsp;( <span class="newAmount active" id="amount_3.8">3.8</span> / <span class="newAmount" id="amount_10">10</span> / <span class="newAmount" id="amount_20">20</span> )&nbsp; liters.</p>
            <h3>Fermentables</h3>
            <ul>
              <li><span class="amount">3.5</span> l of Apple Juice (non-concentrate)</li>
              <li><span class="amount">250</span> g of Frozen Cherries</li>
              <li><span class="amount">500</span> g of Granulated Sugar</li>
            </ul>

            <h3>Yeast</h3>
            <ul>
              <li>WLP775 English Cider Yeast</li>
            </ul>

          </section>

          <section class="instructions">
            <h2>Here's how it's done.</h2>
            <div class="phase" id="preface">
              <h3 onclick="location.href='#preface'">Preface</h3>
              <p><i>Brewing</i> is a craft that revolves around on <i>Planning</i> and <i>Sanitation</i> &mdash; make sure you have all ingredients and equipment ready and sanitised: this will save you a lot of headaches later on.</p>
              <p>However, <i>Brewing</i> is also about <i>Experimentation</i> and <i>Enjoying Yourself</i>. As a wise man once said: <i class="quote"><a href="https://en.wikipedia.org/wiki/Charlie_Papazian" target="_blank">Relax. Don't worry. And have a homebrew</a></i>.</p>
            </div>

            <div class="phase" id="cherry-syrup">
              <h3 onclick="location.href='#cherry-syrup'">Making Cherry Syrup &mdash; [1/4]</h3>
              <p>Cider Ginger has natural yeasts present on its skin &mdash; we'll be cultivating this into a <i>Ginger Bug</i> which we later use to bless ourselves with alcohol. This process will take us two to three days. Don't worry: it's hardly any work at all.</p>
              <ul>
                <li>Fill a mason jar with 500ml of room-temperature water, and add in 25 grams of granulated sugar.</li>
                <li>Use a grater or kitchen knife to couresly grate 25 grams of ginger. Remember to leave the skin on. Add the grated ginger to the mason jar, and use a wooden or plastic spoon to stir.</li>
              </ul>
            </div>

            <div class="phase" id="blend">
              <h3 onclick="location.href='#blend'">The Blend &mdash; [2/4]</h3>
              <p>During <i>The Boil</i> we prepare the <i>Wort</i> for <i>The Fermentation Phase</i> by making sure all fermentable materials are mixed well in our liquid.</p>
              <ul>
                <li>Grab a pot that can hold at least <span class="amount">5</span> liters, and place it on your stove. Pour <span class="amount">3.8</span> liters of water in the pot, and turn on the stove.</li>
                <li>Add <span class="amount">500</span> grams of granulated sugar, and peel- and shred around <span class="amount">100</span> grams of ginger. Add these to the pot too.</li>
              </ul>
            </div>

            <div class="phase" id="fermentation">
              <h3 onclick="location.href='#fermentation'">The Fermentation &mdash; [3/4]</h3>
              <p>During <i>The Fermentation</i> we use our best friend <i>Saccharomyces Cerevisiae</i> &mdash; also known as <i>Brewer's Yeast</i> &mdash; to turn the <i>Wort</i> we just created into <i>Beer!</i> For this to happen, two things are crucial: <i>Sanitation</i> and <i>Temperature Control</i>.</p>
              <ul>
                <li>Make sure anything that (indirectly) touches the <i>Wort</i> from now on is <i>sanitised!</i></li>
                <li>Cool the <i>Wort</i> (in an ice bath, or using a <i>Wort Cooler</i>) until it reaches 21°C.</li>
                <li>Use a <i>Racking Cane</i> to siphon your cooled-down <i>Wort</i> into your sanitised <i>Fermentation Vessel</i>.</li>
                <li><i>Pitch</i> your <i>Yeast</i> (or <i>Yeast Starter</i> if you are fancy 🎩).</li>
                <li><i>Aerate</i> (introduce oxygen) the <i>Wort</i> and <i>Yeast</i> by thoroughly shaking the <i>Fermentation Vessel</i> while closing the top.</li>
                <li>Set up a <i>Blow-Off Tube</i> by attaching rubber hose into a sanitised screw-top stopper, and place the other end in a small bowl of sanitiser solution.</li>
              </ul>

              <div class="intermezzo">
                <!-- <img src="https://placehold.it/40x40" alt=""> -->
                <svg id="clock-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><title>Artboard 1</title><rect x="33.3" y="73.6" width="8.86" height="2.21" transform="translate(-45.87 70.66) rotate(-60.43)"/><rect x="23.4" y="63.82" width="8.85" height="2.21" transform="translate(-28.98 22.94) rotate(-30.34)"/><rect x="36.31" y="23.86" width="2.21" height="8.85" transform="translate(-9.17 22.79) rotate(-30.37)"/><rect x="49.85" y="73.78" width="2.21" height="8.86" transform="translate(-0.52 0.34) rotate(-0.38)"/><rect x="26.55" y="33.75" width="2.21" height="8.85" transform="translate(-19.2 43.39) rotate(-60.43)"/><rect x="19.58" y="50.24" width="8.86" height="2.21" transform="translate(-0.21 0.1) rotate(-0.23)"/><rect x="62.64" y="70.29" width="2.21" height="8.86" transform="translate(-28.57 41.2) rotate(-29.58)"/><path d="M80.81,21.34A42.53,42.53,0,1,0,20.67,81.48,42.53,42.53,0,0,0,80.81,21.34Zm1,28.92v2.21l-8.86,0V50.22ZM77.13,35,78.22,37l-7.7,4.37-1.09-1.92ZM65.35,23.91,67.25,25l-4.47,7.64-1.91-1.12ZM76.71,77.38a36.73,36.73,0,1,1-26-62.7H51V51.41L82.42,70A37,37,0,0,1,76.71,77.38Z"/></svg>
                <p><span>Intermezzo:</span> Keep in a dark place at room temperature for <i>two to three days</i>, until the <i>CO2</i> bubbling quiets down. That's the brew day done for now! Time to relax and have a pint 🍻.</p>
              </div>

              <ul>
                <li>Take off the screw-top stopper, and sanitise- and reassemble it using an airlock filled with sanitiser.</li>
                <li>Sanitise a muslin bag, and add your Centennial hops inside. Lower these in the fermentation vessel.</li>
                <li>Add the final ingredient: <span class="amount">100</span> ml of Red Beet Juice. This will ensure our brew has that <i>ominous</i> red hue that we're after.</li>
                <li>Finally, add screw-top stopper back on the fermentation vessel, and keep it in a dark place at room temperature for two further weeks.</li>
              </ul>
            </div>

            <div class="phase" id="bottling">
              <h3 onclick="location.href='#bottling'">Bottling &mdash; [4/4]</h3>
              <p>Our final step in this journey. In the <i>Bottling</i> phase we &hellip; bottle our brew. For this step, make sure you have sanitised bottles, and a way to close them off (using bottle caps, or swing-top bottles).</p>
              <ul>
                <li>Take off the screw-top stopper from the fermentation vessel, and siphon your <i>(now alcoholic)</i> beer into a sanitised bottling bucket.</li>
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
                  <td>5.9%</td>
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

      <!-- Let the other brews component know which one to not include -->
      <script type="text/javascript"> let currentBrew = 2 </script>

      <?php include('../other-brews.php'); ?>
      <?php include('../footer.php'); ?>


  <style media="screen">
    /* Root colour overrides. Brand identity: IPA—Pocalypse */
    :root {
      --royal-gold: hsl(331, 100%, 30%);
      --royal-gold-dark: hsl(331, 50%, 20%);
      --royal-gold-darker: hsl(331, 50%, 0%);
      --royal-gold-light: hsl(331, 100%, 90%);
      --royal-gold-select: hsla(331, 48%, 60%, .2);
      --royal-gold-sand: hsl(331, 75%, 98%);
    }

    /* Pesky box-shadow overrides: Use autocompleter for this 'hsla(331' -> 'hsla(NEW)'. */
    button.call-to-action{box-shadow:0 0 2px hsla(331,80%,60%,0)}button.call-to-action:focus,button.call-to-action:hover{box-shadow:0 0 10px hsla(331,80%,60%,.5),0 0 30px hsla(331,80%,60%,.25)}nav{box-shadow:0 1px 1px hsla(331,20%,60%,.08),0 2px 2px hsla(331,20%,60%,.12),0 4px 4px hsla(331,20%,60%,.16),0 8px 8px hsla(331,20%,60%,.2)}nav .navbar svg{box-shadow:0 1px 1px hsla(331,20%,60%,.08),0 2px 2px hsla(331,20%,60%,.12),0 4px 4px hsla(331,20%,60%,.16),0 8px 8px hsla(331,20%,60%,.2)}nav .navbar svg:hover{box-shadow:0 1px 2px hsla(331,20%,60%,.16),0 2px 4px hsla(331,20%,60%,.24),0 4px 8px hsla(331,20%,60%,.32),0 8px 16px hsla(331,20%,60%,.4)}footer .social:hover{box-shadow:0 0 10px hsla(331,80%,60%,.5),0 0 30px hsla(331,80%,60%,.25)}.brew-label{box-shadow:0 1px 1px hsla(331,20%,60%,.08),0 2px 2px hsla(331,20%,60%,.12),0 4px 4px hsla(331,20%,60%,.16),0 8px 8px hsla(331,20%,60%,.2)}.hero .brew-label:hover{box-shadow:0 2px 2px hsla(331,20%,60%,.06),0 4px 4px hsla(331,20%,60%,.08),0 8px 8px hsla(331,20%,60%,.12),0 16px 16px hsla(331,20%,60%,.16)}.other-brews .carrousel .carrousel--cell:hover .brew-label{box-shadow:0 2px 2px hsla(331,20%,60%,.06),0 4px 4px hsla(331,20%,60%,.08),0 8px 8px hsla(331,20%,60%,.12),0 16px 16px hsla(331,20%,60%,.16)}
  </style>

  </main>

  <?php include('../scripts.php'); ?>
  </body>
</html>
