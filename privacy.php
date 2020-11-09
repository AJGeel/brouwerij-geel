<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Brouwerij Geel &mdash; Privacy Policy</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <?php include 'links.php' ?>
    <?php include 'components/ascii-biertje.php'; ?>
  </head>
  <body>

    <?php include('nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <section class="full-width-banner" style="background: linear-gradient(hsl(0deg 0% 0% / 80%), hsl(38deg 100% 26% / 80%)), url('/i/unsplash-hops.jpeg');
                                                color: white;
                                                background-position: center center;
                                                background-size: cover;" alt="Photo by Markus Spiske on Unsplash — https://unsplash.com/photos/0376tfLb89c">
        <div class="full-width-banner__inner">
          <h2>Privacy Policy</h2>
          <h1>We care, and think you should too.</h1>
          <p>Far too often, we see modern websites <i>(looking at you, Facebook &amp; Google)</i> follow our every move, all just to push 'more relevant ads'. We don't like that. On this page we share what happens when you visit our page, and the measures we take to protect your data.</p>
        </div>
      </section>

      <article class="container full-width page privacy">

        <p><i>Brouwerij Geel is a website created- and maintained by Arthur Geel.</i></p>

        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          What data do we collect?
        </h1>
        <p>Whenever you visit Brouwerij Geel, we collect anonymous logging data that your browser sends to us. For example, this allows us to understand which devices (phones, tablets, computers) were used to access this website, so we can make sure this website works well for these.</p>
        <p>Often, tools like <i>Google Analytics</i> are used for this. However, tools like these often share your browsing activities with companies like Google. We don't like that. We currently have a rudimentary custom-built logging system in place which does not share your browsing activity with anyone else. 🎉</p>
        <p class="side-note"><span>Side note:</span> in the future we may upgrade to a self-hosted variant of Matomo Analytics, a Google Analytics alternative which actually respects your privacy. This would allow us to better understand how you (anonymously) use this site, without us selling out your data.</p>

        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          How do Cookies fit into this?
        </h1>
        <p>Cookies are files with a small amount of data that are commonly used as an anonymous unique identifier. These are stored on your device's hard drive, and can be requested by the website to understand what should be returned to you.</p>
        <p>Brouwerij Geel's website uses these cookies to make parts of the web-site function, to better understand how this site is being used <i>(and how it should be designed)</i>, and to allow external services/libraries to function.</p>
        <p>The form below contains an overview of your current cookie settings, and what these imply for your privacy. You can easily change your settings by clicking on either option!</p>

        <form class="cookie__settings" action="preventDefault()" onchange="updatePreferences(this);">
          <div class="cookie__top">
            <h2>Cookie settings &mdash; I want...</h2>
            <div class="cookie__save-status">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Your preferences were saved.</span>
            </div>
          </div>

          <input type="radio" name="cookies" id="functional" value="functional">
          <label for="functional" class="cookie__setting active">
            <div class="cookie__header">
              <div class="cookie__checkbox">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <h3>.. just the basics.</h3>
            </div>
            <ul class="cookie__list">
              <li><b>Functional cookies</b> allow the website's essential features to function.</li>
              <li class="inactive"><b>Anonymous statistics</b> on your usage will not be collected.</li>
              <li class="inactive"><b>External content</b> (i.e. Disqus comment threads, social media embeds) will be blocked for additional privacy. This means that some of this website's features may not work properly.</li>
            </ul>
          </label>

          <input type="radio" name="cookies" id="all" value="all">
          <label for="all" class="cookie__setting">
            <div class="cookie__header">
              <div class="cookie__checkbox">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <h3>... all cookies! 🍪</h3>
            </div>
            <ul class="cookie__list">
              <li><b>Functional cookies</b> allow the website's essential features to function.</li>
              <li>The website can collect <b>anonymous statistics</b> (i.e. what browsers commonly visit Brouwerij Geel, which of its pages are popular). These massively help us in developing this site!</li>
              <li><b>External content</b> (i.e. Disqus comment threads, social media embeds) are allowed.</li>
            </ul>
          </label>

        </form>

        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
          External Service Providers
        </h1>
        <p>The Brouwerij Geel website employs a number of third-party services for its functionalities. Here is a list of all third-parties, and how they may affect your privacy:</p>
        <ul>
          <li><b>Disqus (Comment thread system)</b>. Integrating Disqus allowed us to easily allow my visitors to leave comments under the brewing recipe pages, and make spammer's lives tougher. However, Disqus do track non-personally identifiable information, and may even allow marketeers to tailor their ads using that information. <b>We recommend you opt-out of this</b>. You can do so <a class="link" href="https://disqus.com/data-sharing-settings/">by clicking this link</a>. You may also choose to out-right block Disqus from working on this website for you, click on 'Cookie Settings &mdash; I want... just the basics.' for that.</li>
          <li><i>Others will be listed here in the future too.</i></li>
        </ul>


        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          Anonymous Usage Statistics
        </h1>
        <p>Additional information on anonymous statistics we collect will be placed here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          Your Data Protection Rights
        </h1>
        <p>We would like to make sure you are fully aware of all your data protection rights on this website, but on others too. By law of the General Data Protection Regulation (GDPR), every visitor of the Brouwerij Geel webpage is entitled to the following rights:</p>
        <ol>
          <li><b>The right to access</b> &mdash; You have the right to ask us for copies of your personal data.</li>
          <li><b>The right to rectification</b> &mdash; You have the right to ask that we correct any information you believe is inaccurate. You also have the right to ask us to complete information you believe is incomplete.</li>
          <li><b>The right to erasure</b> &mdash;You have the right to ask us to erase your personal data, under certain conditions.</li>
          <li><b>The right to restrict processing</b> &mdash; You have the right to ask us to restrict the processing of your personal data, under certain conditions.</li>
          <li><b>The right to data portability</b> &mdash; You have the right to ask us to transfer the data that we have collected to another organization, or directly to you, under certain conditions.</li>
        </ol>
        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of the rights listed above, please contact us at our email: <a class="link" href="mailto:privacy@brouwerijgeel.nl">privacy@brouwerijgeel.nl</a>.</p></p>

        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
          File a Complaint
        </h1>
        <p>In case you find yourself in a conflict with us, or receive no responses to your queries, you can submit a complaint to the <i>Autoriteit Persoonsgegevens / Dutch Data Protection Authority</i>. Please <a class="link" href="https://autoriteitpersoonsgegevens.nl/">click here</a> to access AP/DDPA's website to read more about this.</p>

        <h1>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          Security
        </h1>
        <p>Brouwerij Geel is serious about protecting this website and its data, and has measures in place to prevent abuse, loss, unauthorized access, unintended disclosure and unauthorized changes with regards to any data on this website. This website is hosted on a secure server in the Netherlands, and encrypts any data transfer with a SSL certificate to prevent third parties from accessing any data.</p>
        <p>However, if you believe something is out of place, or if you would like to request more information about how we secure this website, please get in touch with Brouwerij Geel through <a class="link" href="mailto:security@brouwerijgeel.nl">security@brouwerijgeel.nl</a>.</p>

        <p style="margin-top: 5rem; opacity: .7;"><i>Last updated: Monday, November 9<sup>th</sup>, 2020.</i></p>

      </article>


      <?php include('footer.php'); ?>

      <?php include('scripts.php'); ?>

    </main>

    <script type="text/javascript">

    function updatePreferences(targ) {
      const cookieSaveStatus = document.querySelector('.cookie__save-status');

      // Update the cookie
      updateCookiePreferences(targ.cookies.value);

      // Provide feedback to the user about its success
      // Remove all classes (if any)
      cookieSaveStatus.classList.remove("visible");

      // Re-add after 250ms to animate in
      cookieSaveStatAnimIn = window.setTimeout(function() {
        clearTimeout(cookieSaveStatAnimIn);
        cookieSaveStatus.classList.add("visible");
      }, 150);

      // After a second: remove it again.
      cookieSaveStatAnimOut = setTimeout(function() {
        clearTimeout(cookieSaveStatAnimOut);
        cookieSaveStatus.classList.remove("visible");
      }, 2000);

    }
    </script>

  </body>
</html>
