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

    <!--[if lte IE 10]><script>window.location = "/incompatible-browser.php";</script><![endif]-->
<link rel="shortcut icon" href="i/brouwerij-geel-small.png" type="image/png" id="favicon">
<link rel="stylesheet" href="css/reset.min.css">
<link rel="stylesheet" href="css/style.min.css">

    <?php include '../components/ascii-biertje.php'; ?>
  </head>
  <body>

    <!-- NAV COMPONENT   —   TODO: EXTRACT THIS -->
<nav>
  <div class="navbar">
    <a href="index.html" class="logo" onclick="closeAllMenus()">
      <svg id="brouwerij-geel-logo-nav" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><defs><style>.cls-1{fill:#231f20;}</style></defs><title>brouwerij-geel-logo</title><path class="cls-1" d="M-.49,50.1H10.06c4.92,0,8.24.83,10.41,2.56a11.11,11.11,0,0,1,3.84,8.69,11.92,11.92,0,0,1-1.6,6.08A9.28,9.28,0,0,1,19.64,70c2.88.64,4.22,1.28,5.56,2.69a11.52,11.52,0,0,1,3.07,8,11.68,11.68,0,0,1-3.77,8.76c-2.49,2.24-5.88,3.26-10.61,3.26H-.49ZM10.18,67.87c4.29,0,6.46-1.85,6.46-5.56s-2.17-5.5-6.33-5.5H7.82V67.87ZM11.4,86c5.62,0,8.31-1.92,8.31-5.88a5.35,5.35,0,0,0-2.49-4.74c-1.47-1-2.82-1.21-6.27-1.21H7.82V86Z"/><path class="cls-1" d="M70.5,92.74H60.28L48.77,75.61H47.68V92.74H39.37V50.1H51.71c4.73,0,8.5,1,10.87,3a13.2,13.2,0,0,1,.38,19,11.4,11.4,0,0,1-5.88,2.69Zm-20.39-23c5.24,0,8.12-2.3,8.12-6.52s-2.75-6.4-8-6.4H47.68V69.73Z"/><path class="cls-1" d="M121.86,71.45c0,12.6-10,22.25-23,22.25A22.16,22.16,0,0,1,76.29,71.13c0-12.14,10.23-22,22.88-22S121.86,58.92,121.86,71.45Zm-37-.19c0,8.24,6.33,14.83,14.26,14.83A14.68,14.68,0,1,0,84.85,71.26Z"/><path class="cls-1" d="M141.21,74.52c0,4.35.25,5.75,1.34,7.61a9,9,0,0,0,15,0c1.08-1.86,1.34-3.26,1.34-7.61V50.1h8.31V76.18c0,5-1,8.5-3.13,11.38-2.94,3.84-8.19,6.14-14,6.14S139,91.4,136,87.56c-2.17-2.88-3.13-6.39-3.13-11.38V50.1h8.31Z"/><path class="cls-1" d="M56.64,135.93l10.42-29.41H71.6l9.9,29.41,10.23-29h8.76l-16,43.47H78.63L69.17,122.5l-10,27.87H53.38L38.29,106.9h8.76Z"/><path class="cls-1" d="M114.4,114.13v9.46h14.7v7.22H114.4v11.51h15.28v7.22H106.09V106.9h23.59v7.23Z"/><path class="cls-1" d="M170.2,149.54H160l-11.5-17.13h-1.09v17.13h-8.31V106.9h12.34c4.73,0,8.5,1,10.87,3a13.21,13.21,0,0,1,.38,19,11.48,11.48,0,0,1-5.88,2.68Zm-20.39-23c5.24,0,8.12-2.3,8.12-6.52s-2.75-6.39-8-6.39h-2.56v12.91Z"/><path class="cls-1" d="M184.46,132.73h-8.31V106.9h8.31Z"/><path class="cls-1" d="M210.73,134.41c0,5.88-1.15,9.46-3.77,12a12,12,0,0,1-8,2.94H176.15V141.6l22,0a3.81,3.81,0,0,0,3.71-2.56c.45-1.22.57-2.43.57-6V106.9h8.31Z"/><path class="cls-1" d="M143.64,183.53c-.07,6.26-.58,9.39-2.24,12.65-3.52,7.16-10.1,11.13-18.54,11.13-12.91,0-22.37-9.28-22.37-22.06,0-13,9.52-22.5,22.63-22.5,7.92,0,14.25,3.45,18.28,10l-7.29,3.9a12.23,12.23,0,0,0-11.06-6.32c-8,0-14,6.32-14,14.89,0,8.31,6,14.51,13.94,14.51,6.07,0,10.55-3.58,11.19-9h-10v-7.22Z"/><path class="cls-1" d="M163.91,170.93v9.46h17.27v7.23H163.91v11.5h17.85v7.23H155.6V163.71h26.16v7.22Z"/><path class="cls-1" d="M202,170.93v9.46H219.3v7.23H202v11.5h17.85v7.23H193.72V163.71h26.16v7.22Z"/><path class="cls-1" d="M240.35,199.12H256v7.23H232V163.71h8.31Z"/></svg>
    </a>
    <div class="navbar__links">
      <div class="navbar__link navbar__link-parent">
        <div class="navbar__link-main" onclick="toggleSubmenu(this)">
          <span>Recipes</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
        <div class="nav__submenu">
          <div class="nav__submenu-inner">
            <div class="nav__submenu-main">
              <a href="recipes/hefeweizen.html" class="nav__submenu-link" onclick="closeAllMenus()">
                <img class="nav__submenu-image" src="i/labels/hefeweizen.jpg" alt="Hefeweizen label thumbnail">
                <div class="nav__submenu-content">
                  <div class="nav__submenu-title">Hefeweizen</div>
                  <div class="nav__submenu-subtitle">A classic German beer, blessed with a sweet flavour profile of clove and banana.</div>
                </div>
              </a>
              <a href="recipes/ipa-pocalypse.html" class="nav__submenu-link" onclick="closeAllMenus()">
                <img class="nav__submenu-image" src="i/labels/ipa-pocalypse.jpg" alt="IPA-Pocalypse label thumbnail">
                <div class="nav__submenu-content">
                  <div class="nav__submenu-title">IPA&mdash;Pocalypse</div>
                  <div class="nav__submenu-subtitle">Hoppy and floral IPA goodness, now in a haunting shade of red...</div>
                </div>
              </a>
              <a href="recipes/kiki-cheeky-kriekie.html" class="nav__submenu-link" onclick="closeAllMenus()">
                <img class="nav__submenu-image" src="i/labels/kiki-cheeky-kriekie.jpg" alt="Kiki's Cheeky Kriekie label thumbnail">
                <div class="nav__submenu-content">
                  <div class="nav__submenu-title">Kiki's Cheeky Kriekie</div>
                  <div class="nav__submenu-subtitle">A semi-sweet cider, infused with tart cherries &mdash; how cheeky!</div>
                </div>
              </a>

            </div>
            <div class="nav__submenu-secondary">
              <a href="recipes/index.html" class="nav__submenu-link" onclick="closeAllMenus()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <span>All recipes</span>
              </a>
              <a href="#!" class="nav__submenu-link" onmouseover="imFeelingLucky(this)" onclick="closeAllMenus()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                </svg>
                <span>I'm feeling lucky!</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a class="navbar__link" href="about-us.html" onclick="closeAllMenus()">
        <span>Our Story</span>
      </a>
      <a class="navbar__link" href="brewing-archive.html" onclick="closeAllMenus()">
        <span>Brewing Archive</span>
      </a>
      <div class="navbar__link navbar__link-parent">
        <div class="navbar__link-main" onclick="toggleSubmenu(this)">
          <span>More...</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
        <div class="nav__submenu">
          <div class="nav__submenu-inner">
            <div class="nav__submenu-main">
              <a href="articles/index.html" class="nav__submenu-link" onclick="closeAllMenus()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="nav__submenu-content">
                  <div class="nav__submenu-title">Articles &amp; Thoughts</div>
                  <div class="nav__submenu-subtitle">Exploring brewing styles and techniques is in Brouwerij Geel's DNA. In this page we share our processes and findings.</div>
                </div>
              </a>
              <a href="tools/index.html" class="nav__submenu-link" onclick="closeAllMenus()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <div class="nav__submenu-content">
                  <div class="nav__submenu-title">Digital Brewing Tools</div>
                  <div class="nav__submenu-subtitle">Supporting our (and perhaps your) brewing processes by automating common tasks.</div>
                </div>
              </a>

            </div>
            <div class="nav__submenu-secondary">
              <a href="privacy.html" class="nav__submenu-link" onclick="closeAllMenus()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <span>Privacy Policy</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar__hamburger" onclick="toggleHamburger(this)">
      <svg id="icon-hamburger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </div>
  </div>
</nav>


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

    <!-- Libraries -->
<script src="../js/modules/swup.min.js" charset="utf-8"></script>
<script src="../js/modules/headroom.js" charset="utf-8"></script>

<!-- Minified: use in production -->
<!-- <script src="/js/util.min.js" charset="utf-8"></script> -->
<script src="../js/util.js" charset="utf-8"></script>

<!-- Main -->
<!-- <script src="/js/app.min.js" charset="utf-8"></script> -->
<script src="../js/app.js" charset="utf-8"></script>

<!-- Privacy-oriented & GDPR-compliant analytics -->
<!-- <script async defer src="https://beampipe.io/js/tracker.js" data-beampipe-domain="brouwerijgeel.nl"></script> -->


  </body>
</html>
