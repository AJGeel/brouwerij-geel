// Headroom.JS
const nav = document.querySelector('nav');
let headroom = new Headroom(nav);
headroom.init();

const swup = new Swup();

init();



function init() {

  // Scroll to top
  scrollToTop();

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
    // new Splide('.splide').mount();
    new Splide('.splide', {
      type: 'loop',
      // perPage: 3,
      // focus: 'center',
      // fixedWidth: '60%',
      gap: '2rem',
    }).mount();
  }
}

// Run 'init' function whenever swup has replaced the content
swup.on('contentReplaced', init);
