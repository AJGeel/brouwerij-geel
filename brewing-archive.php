<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Brouwerij Geel &mdash; Brewing Archive</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design, Historic">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <!--[if lte IE 10]><script>window.location = "/incompatible-browser.php";</script><![endif]-->
<link rel="shortcut icon" href="i/brouwerij-geel-small.png" type="image/png" id="favicon">
<link rel="stylesheet" href="css/reset.min.css">
<link rel="stylesheet" href="css/style.min.css">

    <?php include 'components/ascii-biertje.php'; ?>

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

      <div class="container brewing-log limit-width">

        <div class="grid">
          <div class="grid--cell">
            <h1 class="brewing-log--title">Brewing Archive</h1>
            <p class="paragraph">Welcome to <i>Brouwerij Geel's Brewing Archive</i>. On this page you'll find an overview of every single thing we have brewed over the years, including defining characteristics such as <i>Style</i>, <i>Alcohol Percentage</i>, <i>Bitterness</i>, <i>Colour</i> and <i>Clarity</i>.</p>
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
                <th onclick="sortTable(3)">Volume</th>
                <th onclick="sortTable(4)">OG</th>
                <th onclick="sortTable(5)">FG</th>
                <th onclick="sortTable(6)">ABV</th>
                <th onclick="sortTable(7)">IBU</th>
                <th onclick="sortTable(8)">SRM</th>
                <th onclick="sortTable(9)">Clarity</th>
                <th onclick="sortTable(10)">Bottle Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>013</td>
                <td>Sweet &amp; Sour Lemon IPA</td>
                <td>India Pale Ale</td>
                <td>5</td>
                <td>1.057</td>
                <td>1.013</td>
                <td>5.8</td>
                <td>51</td>
                <td>8</td>
                <td>Hazy</td>
                <td>2020-10-23</td>
              </tr>
              <tr>
                <td>012</td>
                <td>Cidre Doux</td>
                <td>Cider</td>
                <td>4</td>
                <td>1.046</td>
                <td>1.005</td>
                <td>5.4</td>
                <td>0</td>
                <td>2</td>
                <td>Slight Haze</td>
                <td>2020-10-23</td>
              </tr>
              <tr>
                <td>011</td>
                <td><a href="/recipes/hefeweizen.php">Hefeweizen</a></td>
                <td>Weißbier</td>
                <td>5</td>
                <td>1.048</td>
                <td>1.010</td>
                <td>6.0</td>
                <td>15</td>
                <td>4</td>
                <td>Hazy</td>
                <td>2020-04-25</td>
              </tr>
              <tr>
                <td>010</td>
                <td><a href="/recipes/ipa-pocalypse.php">IPA&mdash;Pocalypse</a></td>
                <td>India Pale Ale</td>
                <td>4</td>
                <td>1.061</td>
                <td>1.012</td>
                <td>6.4</td>
                <td>45</td>
                <td>9</td>
                <td>Slight Haze</td>
                <td>2020-03-19</td>
              </tr>
              <tr>
                <td>009</td>
                <td><a href="/recipes/chateau-jaune.php">Natural Red Wine</a></td>
                <td>Wine</td>
                <td>12</td>
                <td>1.060</td>
                <td>0.998</td>
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
                <td>4</td>
                <td>1.081</td>
                <td>1.033</td>
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
                <td>4</td>
                <td>1.057</td>
                <td>1.012</td>
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
                <td>16</td>
                <td>1.039</td>
                <td>0.999</td>
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
                <td>4</td>
                <td>1.029</td>
                <td>1.008</td>
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
                <td>16</td>
                <td>1.071</td>
                <td>1.009</td>
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
                <td>4</td>
                <td>1.021</td>
                <td>1.006</td>
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
                <td>16</td>
                <td>1.054</td>
                <td>0.998</td>
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
                <td>16</td>
                <td>1.042</td>
                <td>1.008</td>
                <td>4.5</td>
                <td>0</td>
                <td>12</td>
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
