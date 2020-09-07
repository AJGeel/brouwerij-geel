// Headroom.JS
const nav = document.querySelector('nav');
let headroom = new Headroom(nav);
headroom.init();

const swup = new Swup();

// PageLoad: execute relevant JS functions
init();

function init() {

  // Scroll to top
  scrollToTop();

  // Check which utility functions need to be ran, dependent on page content.

  if (document.querySelectorAll('.other-brews')[0] !== undefined) {
    // console.log('Run Other Brews JS functions.');
    updateBrewSelection();
  }

  if (document.querySelectorAll('.brewing-log')[0] !== undefined) {
    // console.log('Run Brewing Log Table JS functions.');
    getStatsFromTable();
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
}

// Run 'init' function whenever swup has replaced the content
swup.on('contentReplaced', init);
