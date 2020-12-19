//On page load: check for old (incompatible) browser. If so: redirect.
if (isIE()) {
  window.location = "/incompatible-browser.php";
}

/* Global variables */
// Headroom.JS
const nav = document.querySelector('nav');
let timelineItems;

let headroom = new Headroom(nav);
headroom.init();

const swup = new Swup();
init();

let cookiePreferences;


function init() {

  // Scroll to top
  scrollToTop();

  // Check cookies
  checkPreferences();

  // Check which utility functions need to be ran, dependent on page content.

  if (document.querySelectorAll('.other-brews')[0] !== undefined) {
    // console.log('Run Other Brews JS functions.');
    // Check for 'Other Brews'

    updateBrewSelection();
  }

  if (document.querySelectorAll('.brewing-log')[0] !== undefined) {
    // console.log('Run Brewing Log Table JS functions.');
    getStatsFromTable();
    updateTableStats();
  }

  if (document.querySelectorAll('.recipe')[0] !== undefined) {
    // console.log('Run Recipe JS functions.');
    makeListsClickable();
    addAmountListeners();
    updateSrmColour();
    updateBeerHaziness();
  }

  if (document.querySelectorAll('.blog')[0] !== undefined) {
    // console.log('Run Blog JS functions.');
    calcReadingTime();
    updatePageTitle();
  }

  if (document.getElementById('disqus_thread') !== null) {
    // console.log('Run Disqus JS functions.');

    if (typeof DISQUS !== 'undefined') {
      DISQUS.reset({
        reload: true,
        config: function () {
          this.page.url = `https://brouwerijgeel.nl${window.location.pathname}`;
          this.page.identifier = window.location.pathname;
        }
      });

      const noticeMessage = document.querySelectorAll('.notice')[0];
      noticeMessage.style.display = 'none';
    } else {
      // Initialise disqus; setup config and create thread
      let disqus_config = function () {
        this.page.url = `https://brouwerijgeel.nl${window.location.pathname}`;
        this.page.identifier = window.location.pathname;
      };

      createDisqusThread();
    }
  }

  if (document.querySelectorAll('.splide')[0] !== undefined) {
    // Splide alternative: Flickity https://flickity.metafizzy.co/#new-flickity-v2-2
    // new Splide('.splide').mount();
    new Splide('.splide', {
      type: 'loop',
      // perPage: 3,
      // focus: 'center',
      // fixedWidth: '60%',
      gap: '2rem',
    }).mount();
  }

  if (document.querySelectorAll('.timeline')[0] !== undefined) {
    timelineItems = document.querySelectorAll(".timeline .timeline__item");
    // console.log(timelineItems);
    window.addEventListener("load", checkIfInView);
    window.addEventListener("scroll", checkIfInView);
  }

  if (document.querySelectorAll('.tool__abv-calc')[0] !== undefined) {

    const inputOG = document.getElementById('inputOG');
    const inputFG = document.getElementById('inputFG');

    const formulaLink = document.getElementById('formulaLink');
    const formulaBox = document.querySelector('.formula');

    // Eventlistener: toggle the state once clicked.
    formulaLink.addEventListener('click', function() {
      if (formulaLink.innerText === '🤔 Remind me of that formula again...') {
        formulaBox.style.display = 'block';
        formulaLink.innerText = "I've had enough.. no more physics for me! 😱";
      } else {
        formulaBox.style.display = 'none';
        formulaLink.innerText = "🤔 Remind me of that formula again...";
      }
    })

    // Accessibility: adding the same eventlistener to hitting enter on the selected tag.
    formulaLink.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        if (formulaLink.innerText === '🤔 Remind me of that formula again...') {
          formulaBox.style.display = 'block';
          formulaLink.innerText = "I've had enough.. no more physics for me! 😱";
        } else {
          formulaBox.style.display = 'none';
          formulaLink.innerText = "🤔 Remind me of that formula again...";
        }
      }
    })

    updateABV();
  }
}

// Run 'init' function whenever swup has replaced the content
swup.on('contentReplaced', init);
