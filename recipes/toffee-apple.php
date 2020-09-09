<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Brouwerij Geel &mdash; Toffee Apple Cider Recipe</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <?php include '../links.php' ?>
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

        <section class="hero outlined limit-width">
          <div class="hero--left">
            <p class="category">Cider / Craft Cider</p>
            <p class="publish-date">December 7<sup>th</sup>, 2017</p>
            <h1 class="brew-name">Toffee Apple</h1>
            <p class="brew-description">We all have to start somewhere. Well, Brouwerij Geel's brewing journey started with a <i>Toffee Apple-flavoured Cider</i>. 2017 had been a year where we enjoyed a lot of <i>Brothers'</i> ciders, especially their <i>Toffee Apple</i> kind &mdash; so sweet, yet so good. With this first ever brew we tried to replicate it.</p>
            <button class="call-to-action" type="button" name="call-to-action" onclick="location.href='#recipe'"><span>Check out the Recipe &rarr;</span></button>
          </div>
          <div class="hero--right">
            <img class="brew-label" src="../i/labels/toffee-apple.jpg" alt="Brew label" onclick="location.href='#recipe'">
            <!-- <img class="brew-label" src="../i/labels/ipa-pocalypse.jpg" alt="Brew label" onclick="location.href='#recipe'"> -->
          </div>
        </section>

        <article class="recipe limit-width" id="recipe">
          <section class="ingredients outlined">
            <h2>Ingredients*</h2>
            <p class="batch-size">* This recipe results in a batch of &nbsp;( <span class="newAmount active" id="amount_3.8">3.8</span> / <span class="newAmount" id="amount_10">10</span> / <span class="newAmount" id="amount_20">20</span> )&nbsp; liters.</p>
            <h3>Fermentables</h3>
            <ul>
              <li><span class="amount">0.57</span> kg Toffee-Flavoured Apple Concentrate</li>
            </ul>

            <!-- <h3>Hops &amp; Aromatics</h3>
            <ul>
              <li><span class="amount">13</span> g Cascade Hops (10% AA)</li>
              <li><span class="amount">37</span> g Citra Hops (9% AA)</li>
              <li><span class="amount">100</span> g Amarillo Hops (15% AA)</li>
            </ul> -->

            <h3>Yeast</h3>
            <ul>
              <li>White Labs WLP518 Opshaug Kveik Ale Yeast</li>
            </ul>

          </section>

          <section class="instructions">
            <h2>Here's how it's done.</h2>
            <div class="phase" id="preface">
              <h3 onclick="location.href='#preface'">Preface</h3>
              <p><i>Brewing</i> is a craft that revolves around on <i>Planning</i> and <i>Sanitation</i> &mdash; make sure you have all ingredients and equipment ready and sanitised: this will save you a lot of headaches later on.</p>
              <p>However, <i>Brewing</i> is also about <i>Experimentation</i> and <i>Enjoying Yourself</i>. As a wise man once said: <i class="quote"><a href="https://en.wikipedia.org/wiki/Charlie_Papazian" target="_blank">Relax. Don't worry. And have a homebrew</a></i>.</p>
            </div>

            <div class="phase" id="mash">
              <h3 onclick="location.href='#mash'">The Mash &mdash; [1/5]</h3>
              <p>During <i>The Mash</i> we convert all sugars in the grain to fermentable sugars by steeping it in hot water for a long period of time. Additionally, <i>The Mash</i> extracts colour and flavour from the grain.</p>
              <ul>
                <li>Paleo everyday carry cold-pressed blog tilde whatever tacos hashtag cronut</li>
                <li>Cliche art party freegan, hashtag forage taxidermy everyday carry. </li>
                <li>90's typewriter vaporware, la croix green juice cred scenester health goth iceland next level mlkshk raw denim kitsch try-hard affogato.</li>
                <li>Pitchfork sustainable authentic, echo park master cleanse biodiesel taxidermy quinoa artisan woke cloud bread.</li>
              </ul>
            </div>

            <div class="phase" id="sparge">
              <h3 onclick="location.href='#sparge'">The Sparge &mdash; [2/5]</h3>
              <p>During <i>The Sparge</i> we separate the <i>Wort</i> from <i>The Grains</i> by straining it, and pouring hot water over it to draw all of the fantastic sugars and flavours that we extracted in the previous step.</p>
              <ul>
                <li>Paleo everyday carry cold-pressed blog tilde whatever tacos hashtag cronut</li>
                <li>Cliche art party freegan, hashtag forage taxidermy everyday carry. </li>
                <li>90's typewriter vaporware, la croix green juice cred scenester health goth iceland next level mlkshk raw denim kitsch try-hard affogato.</li>
                <li>Pitchfork sustainable authentic, echo park master cleanse biodiesel taxidermy quinoa artisan woke cloud bread.</li>
              </ul>
            </div>

            <div class="phase" id="boil">
              <h3 onclick="location.href='#boil'">The Boil &mdash; [3/5]</h3>
              <p>During <i>The Boil</i> we bring our <i>Wort</i> to a low, rolling boil. In this phase, we also add our hops, aromatics and other special ingredients. In terms of profile, adding hops during boil will result in <i>Bitterness</i> (long boil), <i>Flavour</i> (medium boil) and <i>Aroma</i> (boiled briefly).</p>
              <ul>
                <li>Paleo everyday carry cold-pressed blog tilde whatever tacos hashtag cronut</li>
                <li>Cliche art party freegan, hashtag forage taxidermy everyday carry. </li>
                <li>90's typewriter vaporware, la croix green juice cred scenester health goth iceland next level mlkshk raw denim kitsch try-hard affogato.</li>
                <li>Pitchfork sustainable authentic, echo park master cleanse biodiesel taxidermy quinoa artisan woke cloud bread.</li>
              </ul>
            </div>

            <div class="phase" id="fermentation">
              <h3 onclick="location.href='#fermentation'">The Fermentation &mdash; [4/5]</h3>
              <p>During <i>The Fermentation</i> we use our best friend <i>Saccharomyces Cerevisiae</i> &mdash; also known as <i>Brewer's Yeast</i> &mdash; to turn the <i>Wort</i> we just created into <i>Beer!</i> For this to happen, two things are crucial: <i>Sanitation</i> and <i>Temperature Control</i>.</p>
              <ul>
                <li>Paleo everyday carry cold-pressed blog tilde whatever tacos hashtag cronut</li>
                <li>Cliche art party freegan, hashtag forage taxidermy everyday carry. </li>
                <li>90's typewriter vaporware, la croix green juice cred scenester health goth iceland next level mlkshk raw denim kitsch try-hard affogato.</li>
                <li>Pitchfork sustainable authentic, echo park master cleanse biodiesel taxidermy quinoa artisan woke cloud bread.</li>
              </ul>

              <div class="intermezzo">
                <svg id="clock-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><title>Artboard 1</title><rect x="33.3" y="73.6" width="8.86" height="2.21" transform="translate(-45.87 70.66) rotate(-60.43)"/><rect x="23.4" y="63.82" width="8.85" height="2.21" transform="translate(-28.98 22.94) rotate(-30.34)"/><rect x="36.31" y="23.86" width="2.21" height="8.85" transform="translate(-9.17 22.79) rotate(-30.37)"/><rect x="49.85" y="73.78" width="2.21" height="8.86" transform="translate(-0.52 0.34) rotate(-0.38)"/><rect x="26.55" y="33.75" width="2.21" height="8.85" transform="translate(-19.2 43.39) rotate(-60.43)"/><rect x="19.58" y="50.24" width="8.86" height="2.21" transform="translate(-0.21 0.1) rotate(-0.23)"/><rect x="62.64" y="70.29" width="2.21" height="8.86" transform="translate(-28.57 41.2) rotate(-29.58)"/><path d="M80.81,21.34A42.53,42.53,0,1,0,20.67,81.48,42.53,42.53,0,0,0,80.81,21.34Zm1,28.92v2.21l-8.86,0V50.22ZM77.13,35,78.22,37l-7.7,4.37-1.09-1.92ZM65.35,23.91,67.25,25l-4.47,7.64-1.91-1.12ZM76.71,77.38a36.73,36.73,0,1,1-26-62.7H51V51.41L82.42,70A37,37,0,0,1,76.71,77.38Z"/></svg>
                <p><span>Intermezzo:</span> Keep in a dark place at room temperature for <i>two to three days</i>, until the <i>CO2</i> bubbling quiets down. That's the brew day done for now! Time to relax and have a pint 🍻.</p>
              </div>

              <ul>
                <li>Paleo everyday carry cold-pressed blog tilde whatever tacos hashtag cronut</li>
                <li>Cliche art party freegan, hashtag forage taxidermy everyday carry. </li>
                <li>90's typewriter vaporware, la croix green juice cred scenester health goth iceland next level mlkshk raw denim kitsch try-hard affogato.</li>
                <li>Pitchfork sustainable authentic, echo park master cleanse biodiesel taxidermy quinoa artisan woke cloud bread.</li>
              </ul>
            </div>

            <div class="phase" id="bottling">
              <h3 onclick="location.href='#bottling'">Bottling &mdash; [5/5]</h3>
              <p>Our final step in this journey. In the <i>Bottling</i> phase we &hellip; bottle our brew. For this step, make sure you have sanitised bottles, and a way to close them off (using bottle caps, or swing-top bottles).</p>
              <ul>
                <li>Paleo everyday carry cold-pressed blog tilde whatever tacos hashtag cronut</li>
                <li>Cliche art party freegan, hashtag forage taxidermy everyday carry. </li>
                <li>90's typewriter vaporware, la croix green juice cred scenester health goth iceland next level mlkshk raw denim kitsch try-hard affogato.</li>
                <li>Pitchfork sustainable authentic, echo park master cleanse biodiesel taxidermy quinoa artisan woke cloud bread.</li>
              </ul>
            </div>

            <div class="phase" id="stats">
              <h3 onclick="location.href='#stats'">Stats for Nerds</h3>
              <p>Finally, here are some statistics that brewing nerds would appreciate. Keep in mind these have been measured using homebrewing equipment, and may not be lab-accurate.  If you managed to get your hands on a bottle of this brew, we would recommend you experience it using <a target="_blank" href="https://www.craftbeer.com/wp-content/uploads/CB_Food_Course/resources/BeerTastingSheet.pdf">this tasting sheet</a>!</p>

              <table>
                <tr>
                  <th>Initial Specific Gravity (OG)</th>
                  <td>1.337</td>
                  <!-- Values: (0.990, 1.075+) -->
                </tr>
                <tr>
                  <th>Final Specific Gravity (FG)</th>
                  <td>1.000</td>
                  <!-- Values: (0.990, 1.075+) -->
                </tr>
                <tr>
                  <th>Alcohol By Volume (ABV)</th>
                  <td>4.5%</td>
                  <!-- Values: (0%, 67.5%+) -->
                </tr>
                <tr>
                  <th>Bitterness (IBU)</th>
                  <td>0</td>
                  <!-- Values: (0, 100+) -->
                </tr>
                <tr id="srmRow">
                  <th>Colour (SRM)</th>
                  <td id="srm">12</td>
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

    <style media="screen">
      /* Root colour overrides. Brand identity: IPA—Pocalypse */
      :root {
        --royal-gold: hsl(26, 65%, 42%);
        --royal-gold-dark: hsl(26, 30%, 20%);
        --royal-gold-darker: hsl(26, 30%, 10%);
        --royal-gold-light: hsl(26, 100%, 90%);
        --royal-gold-select: hsla(26, 48%, 60%, .2);
        --royal-gold-sand: hsl(26, 18%, 96%);
      }

      /* Pesky box-shadow overrides: Use autocompleter for this 'hsla(26' -> 'hsla(NEW)'. */
      button.call-to-action{box-shadow:0 0 2px hsla(26,80%,60%,0)}button.call-to-action:focus,button.call-to-action:hover{box-shadow:0 0 10px hsla(26,80%,60%,.5),0 0 30px hsla(26,80%,60%,.25)}nav{box-shadow:0 1px 1px hsla(26,20%,60%,.08),0 2px 2px hsla(26,20%,60%,.12),0 4px 4px hsla(26,20%,60%,.16),0 8px 8px hsla(26,20%,60%,.2)}nav .navbar svg{box-shadow:0 1px 1px hsla(26,20%,60%,.08),0 2px 2px hsla(26,20%,60%,.12),0 4px 4px hsla(26,20%,60%,.16),0 8px 8px hsla(26,20%,60%,.2)}nav .navbar svg:hover{box-shadow:0 1px 2px hsla(26,20%,60%,.16),0 2px 4px hsla(26,20%,60%,.24),0 4px 8px hsla(26,20%,60%,.32),0 8px 16px hsla(26,20%,60%,.4)}footer .social:hover{box-shadow:0 0 10px hsla(26,80%,60%,.5),0 0 30px hsla(26,80%,60%,.25)}.brew-label{box-shadow:0 1px 1px hsla(26,20%,60%,.08),0 2px 2px hsla(26,20%,60%,.12),0 4px 4px hsla(26,20%,60%,.16),0 8px 8px hsla(26,20%,60%,.2)}.hero .brew-label:hover{box-shadow:0 2px 2px hsla(26,20%,60%,.06),0 4px 4px hsla(26,20%,60%,.08),0 8px 8px hsla(26,20%,60%,.12),0 16px 16px hsla(26,20%,60%,.16)}.other-brews .carrousel .carrousel--cell:hover .brew-label{box-shadow:0 2px 2px hsla(26,20%,60%,.06),0 4px 4px hsla(26,20%,60%,.08),0 8px 8px hsla(26,20%,60%,.12),0 16px 16px hsla(26,20%,60%,.16)}
    </style>

    </main>

    <?php include('../scripts.php'); ?>

  </body>
</html>
