<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Bloggerij Geel &mdash; Nano-Brewery from Utrecht</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <link rel="shortcut icon" href="/i/brouwerij-geel-small.png" type="image/png" id="favicon">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">

    <style media="screen">

      .blog {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      /* Blog Header */

      .blog-header {
        margin-top: 2em;
        padding: 4em;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .blog-header h1 {
        font-size: 3em;
        line-height: 1;
        font-style: italic;
        margin: .4em 0;
        text-align: center;
        max-width: 1100px;
      }

      .blog-meta p {
        font-size: 1em;
        font-style: italic;
        opacity: .7;
        margin: .5em 0;
        display: flex;
        justify-content: center;
      }

      .blog-meta p span::after {
        margin-left: 1em;
        margin-right: 1em;
        content: '—';
      }

      .blog-meta p span:last-of-type::after {
        content: none;
      }

      .blog-header img {
        margin-top: 1em;
        border-radius: 4px;
        width: 100%;
      }

      /* Blog article */

      .blog-article {
        margin-top: 4em;
        max-width: 40em;
      }

      .blog-article p {
        margin-bottom: 1.5em;
      }

      .blog-article p b {
        font-weight: bold;
      }

      .blog-article blockquote {
        float: right;
        border-radius: 4px;
        background-color: var(--royal-gold-select);
        opacity: .8;
        max-width: 17em;
        margin-left: 1em;
        font-size: 1.1em;
        text-align: center;
        padding: 1em;
        font-style: italic;
      }


      /* Fancy dropcap */
      .blog-article .dropcap:first-child:first-letter {
        color: var(--royal-gold);
        float: left;
        font-size: 52px;
        line-height: 1;
        padding-top: 2px;
        padding-right: 12px;
      }

      .blog-article p:last-child {
        margin-bottom: 0;
      }

      .blog-article h2 {
        font-size: 1.5em;
        margin-top: 1.5em;
        margin-bottom: .5em;
        font-weight: bold;
      }

      .blog-article .faq {
        padding: 2em;
        margin-bottom: 2em;
      }

      .blog-article .faq p:first-child {
        font-style: italic;
      }

      .blog-article .faq p:first-child::before {
        content: 'Q: ';
      }

      .blog-article img {
        border-radius: 4px;
      }

      /* Blog controls */

      .blog-controls a {
        font-family: 'Sen', sans-serif;
        text-transform: uppercase;
        color: var(--royal-gold);
        letter-spacing: 1.2px;
        text-decoration: none;
      }

      .blog-controls.desktop a {
        position: fixed;
      }

      .blog-controls a:hover {
        color: var(--royal-gold-dark);
      }

      .blog-controls.desktop a.prev {
        transform: rotate(270deg) translateY(-55px);
        left: 0;
        top: calc(50vh + -13.5px);
      }

      .blog-controls.desktop a.next {
        transform: rotate(90deg) translateY(-30px);
        right: 0;
        top: calc(50vh + -13.5px);
      }

      .blog-controls.mobile {
        display: none;
      }

      @media only screen and (max-width: 768px) {
        .blog-header {
          padding: 0;
        }

        .blog-header h1 {
          font-size: 2em;
        }

        .blog-meta .details {
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
        }

        .blog-meta .details span:nth-child(2n) {
          display: none;
        }

        .blog-meta .details span:nth-child(3)::after {
          content: none;
        }

        .blog-controls.desktop {
          display: none;
        }

        .blog-controls.mobile {
          display: flex;
          justify-content: space-between;
          align-items: center;
          text-align: center;
          flex-wrap: wrap;
          border-top: 1px solid var(--royal-gold);
          padding-top: 2em;
        }
      }
    </style>

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

  </head>
  <body>

    <?php include('../nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="blog-controls desktop">
        <a class="prev" href="#!">Previous Article</a>
        <a class="next" href="#!">Next Article</a>
      </div>



      <div class="container blog">

        <div class="blog-header">
          <h1>Yeast Harvesting in Three Steps</h1>
          <div class="blog-meta">
            <p class="details">
              <span class="meta-date">March 22<sup>nd</sup>, 2020</span>
              <span class="meta-author">By Brülosophy</span>
              <span class="meta-reading-time"><span id="readingTime">Unknown</span> minute read</span>
              <span class="meta-views">0 Views</span>
            </p>
          </div>

          <!-- <img src="https://placehold.it/1920x1080" alt="placeholder image"> -->
          <img src="https://i.imgur.com/0naQgdD.jpg" alt="Placeholder Image">
        </div>

        <article class="blog-article">
          <p class="dropcap">When I initially started tinkering with the idea of harvesting yeast from starters, I was unable to find references to anyone else using a similar method. Since I wrote about it, I’ve heard from a number of folks who had been using a similar process, hence I take no credit for developing this method and appreciate all the feedback I’ve received.</p>

          <!-- <blockquote>A healthy sourdough starter means great bread.</blockquote> -->


          <h2>Step One</h2>
          <p>Make your starter at least 24-36 hours before you plan to pitch, I’ve learned that older strains tend to take a bit more time than more recently harvested yeast, so plan accordingly. Using a good yeast calculator, overbuild your starter by 100 billion cells. BrewUnited’s <a href="#!">Overbuild Harvest</a> function makes this so incredibly easy, you can even <a href="#!">download a spreadsheet version</a>. Usually, the extra amount will be less than or right about 1 liter.</p>

          <h2>Step Two</h2>
          <p>After at least 24 hours on the stir plate (longer if shaken or using older yeast), you can harvest the yeast. Since I like to crash and decant, I always harvest my yeast the night before I brew. To do this, sanitize an appropriately sized Mason/Ball jar using whatever sanitizer you prefer, remove your flask of starter from the stir plate, secure the stir bar using a magnet, and fill the sanitized jar with the proper amount of slurry.</p>
          <p>I usually give the flask a good swirl before transferring to ensure homogeneity. Loosely cover the jar with a sanitized lid and place it in the fridge for 24+ hours. This is also the point I’ll move my flask to the cold ferm chamber to crash overnight.</p>
          <img src="https://i.imgur.com/sMJ7YaJ.jpg" alt="Placeholder Image">

          <h2>Step Three</h2>
          <p>Place the jar in the fridge and pull it out a few hours before you make your next starter. That’s basically it!</p>
          <p>Previously, I encouraged people to replace the beer on top of the yeast with pre-boiled and chilled water if they planned to store it for longer than a couple weeks. However, I’ve recently been made aware of some <a href="#!">fairly convincing evidence</a> suggesting this is both unnecessary and potentially harmful to the yeast. I started leaving the starter beer on top of the harvested cake and I’ve experienced no noticeably negative impact. For these reasons, I no longer plan to replace the beer with boiled water and recommend others follow suit.</p>
          <p>After some time in the fridge, a nice layer of creamy yeast will be sitting at the bottom of the jar.</p>
          <img src="https://i.imgur.com/qrEqVZo.jpg" alt="Placeholder Image">

          <h2>Frequently Asked Questions</h2>
          <div class="faq outlined">
            <p>How many generations of yeast can be harvested before it goes bad?</p>
            <p>I’ve only anecdotal evidence, so keep that in mind. At the writing of this article, I have two strains of yeast, WLP090 San Diego Super Yeast and WLP002 English Ale Yeast, both have been harvested 13 times. The 12th beer each fermented tasted great with no noticeable differences compared to the original vial. I’ve used this method successfully with ale, hybrid, and lager strains.</p>
          </div>
          <div class="faq outlined">
            <p>What makes this method any better than rinsing (“washing”) yeast?</p>
            <p>To start with, I personally think it is much easier and far less time consuming. Additionally, the yeast fermented a wort of ~1.040 OG that had no hops in it, so it is arguably less stressed and ultimately cleaner. I also like that I’m only harvesting a single jar of yeast as opposed to multiple jars that would eventually end up in the trash.</p>
          </div>
          <div class="faq outlined">
            <p>How much yeast is actually being harvested using this method?</p>
            <p>I don’t know. I wish I knew, but I’ve yet to find anyone with the know-how to do an official count. As I mentioned before, I’ve been assuming 100 billion cells, though I fully accept this number is likely way off. Still, it has worked great for me.</p>
          </div>
          <p>If you have any more questions or comments regarding yeast harvesting, please do not hesitate to ask. Cheers!</p>

          <div class="blog-controls mobile">
            <a class="prev" href="#!">Previous Article</a>
            <a class="next" href="#!">Next Article</a>
          </div>

        </article>



      </div>

      <?php include('../footer.php'); ?>

    </main>

    <?php include('../scripts.php'); ?>

  </body>
</html>
