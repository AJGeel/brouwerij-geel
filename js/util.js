/*

— 'util.js' is a collection of all utility functions used in 'app.js'.

— Ascii art is used to visually separate the modules.
— Generator: http://www.patorjk.com/software/taag/#p=display&f=Big&t=OTHER-BREWS
*/

/*
  ____ _______ _    _ ______ _____        ____  _____  ________          _______
/ __ \__   __| |  | |  ____|  __ \      |  _ \|  __ \|  ____\ \        / / ____|
| |  | | | |  | |__| | |__  | |__) |_____| |_) | |__) | |__   \ \  /\  / / (___
| |  | | | |  |  __  |  __| |  _  /______|  _ <|  _  /|  __|   \ \/  \/ / \___ \
| |__| | | |  | |  | | |____| | \ \      | |_) | | \ \| |____   \  /\  /  ____) |
\____/  |_|  |_|  |_|______|_|  \_\     |____/|_|  \_\______|   \/  \/  |_____/

*/

// Immutable array of all other brews
const allOtherBrews = [
  `<a href="/recipes/ipa-pocalypse.html" class="carrousel--cell">
    <img class="brew-label" src="i/labels/ipa-pocalypse.jpg" alt="IPA—Pocalypse label">
    <h3>Red Beet IPA &mdash; ABV: 7.4%</h3>
    <p>March 18<sup>th</sup>, 2020</p>
  </a>`,

  `<a href="/recipes/gembier.html" class="carrousel--cell">
    <img class="brew-label" src="i/labels/gembier.jpg" alt="Gembier label">
    <h3>Ginger Beer  &mdash; ABV: 6.2%</h3>
    <p>February 25<sup>th</sup>, 2020</p>
  </a>`,

  `<a href="/recipes/kiki-cheeky-kriekie.html" class="carrousel--cell">
    <img class="brew-label" src="i/labels/kiki-cheeky-kriekie.jpg" alt="Kiki's Cheeky Kriekie label">
    <h3>Cherry Cider &mdash; ABV: 5.9%</h3>
    <p>October 21<sup>th</sup>, 2019</p>
  </a>`,

  `<a href="/recipes/chateau-jaune.html" class="carrousel--cell">
    <img class="brew-label no-padding" src="i/labels/chateau-jaune.jpg" alt="Château Jaune label">
    <h3>Red Wine &mdash; ABV: 7.9%</h3>
    <p>February 28<sup>th</sup>, 2020</p>
  </a>`,

  `<a href="/recipes/toffee-apple.html" class="carrousel--cell">
    <img class="brew-label" src="i/labels/toffee-apple.jpg" alt="Toffee Apple Cider label">
    <h3>Toffee Cider &mdash; ABV: 4.5%</h3>
    <p>December 7<sup>th</sup>, 2017</p>
  </a>`,

  `<a href="/recipes/dry-hopped-cider.html" class="carrousel--cell">
    <img class="brew-label" src="i/labels/dry-hopped-cider.jpg" alt="Dry-Hopped Cider label">
    <h3>Dry-Hopped Cider &mdash; ABV: 5.3%</h3>
    <p>September 18<sup>th</sup>, 2019</p>
  </a>`,

  `<a href="/recipes/hefeweizen.html" class="carrousel--cell">
    <img class="brew-label no-padding" src="i/labels/hefeweizen.jpg" alt="Hefeweizen label">
    <h3>Hefeweizen &mdash; ABV: 6.0%</h3>
    <p>April 25<sup>th</sup>, 2020</p>
  </a>`
];

const allBrewUrls = [
  'toffee-apple', 'gembier', 'dry-hopped-cider', 'kiki-cheeky-kriekie', 'chateau-jaune', 'ipa-pocalypse', 'hefeweizen'
];

function selectRandomBrewUrl() {
  // Randomly select one out of all potential recipe urls
  let url = getRandom(allBrewUrls, 1);

  // before the url, after the url..
  const pre = '/recipes/';
  const post = '.html';

  // Concatenate strings to generate a valid URL
  url = `${pre}${url}${post}`;
  return url;
}

// Function used in the nav menu: adjusts the href of the button to direct to a random recipe
function imFeelingLucky(target) {
  // Check url of current page
  const thisPageURL = window.location.pathname;


  // Grab a random URL
  let newURL = selectRandomBrewUrl();

  // Ensure the user is never sent to the page they are on
  while (newURL === thisPageURL) {
    newURL = selectRandomBrewUrl();
  }

  // Redirect browser to target URL
  target.href = newURL;
}

// To contain a copy of the brews, will be edited.
let otherBrews = [];


function removeCurrentBrew(target) {
  // If there is an active current brew, we remove it from the array
  otherBrews.splice(target, 1);
}


/* Function that returns a random selection of the brews */
function getRandom(arr, n) {
    let result = new Array(n),
        len = arr.length,
        taken = new Array(len);
    if (n > len)
        throw new RangeError("getRandom: more elements taken than available");
    while (n--) {
        let x = Math.floor(Math.random() * len);
        result[n] = arr[x in taken ? taken[x] : x];
        taken[x] = --len in taken ? taken[len] : len;
    }
    return result;
}

function checkActiveSelection() {
  if (document.querySelectorAll('.brew-name')[0] !== undefined) {
    // Get the text of the active brew name
    const brewName = document.querySelectorAll('.brew-name')[0].innerText;

    // Array that holds all brews in the correct order
    const allBrewNames = [
      'IPA—Pocalypse',
      'Gembier',
      'Cherry Cider',
      'Natural Red Wine',
      'Toffee Apple',
      'Dry-Hopped Cider',
      'Hefeweizen'
    ];

    // Check if the brewName can be found in allBrewNames. If so, returns true
    // If not: returns false.
    const match = allBrewNames.indexOf(`${brewName}`);

    if (match > -1) {
      return match;
    } else {
      return false;
    }
  }

  return false;
}

/* Function that grabs a number of brews, and updates the Carrousel */
function updateBrewSelection() {
  // Make mutable copy of master elements
  otherBrews = allOtherBrews.slice();

  // Check if there is an active brew label
  let match = checkActiveSelection();

  if (match > -1) {
    // If so: remove this brew from the `otherBrews` component
    removeCurrentBrew(match);
  }

  // We take three random brews out of the full list
  let brewSelection = getRandom(otherBrews, 3);

  // Then, we update the Carrousel DOM element to include these brews.
  const carrousel = document.querySelector('.carrousel');

  // First, we delete the 'no javascript' notice message.
  carrousel.innerHTML = "";

  // Then, we add three brew labels
  for (let i = 0; i < brewSelection.length; i++) {
      carrousel.insertAdjacentHTML('beforeend', brewSelection[i]);
  }
}

/*

 ____  _____  ________          _______ _   _  _____     _______       ____  _      ______
|  _ \|  __ \|  ____\ \        / /_   _| \ | |/ ____|   |__   __|/\   |  _ \| |    |  ____|
| |_) | |__) | |__   \ \  /\  / /  | | |  \| | |  __ ______| |  /  \  | |_) | |    | |__
|  _ <|  _  /|  __|   \ \/  \/ /   | | | . ` | | |_ |______| | / /\ \ |  _ <| |    |  __|
| |_) | | \ \| |____   \  /\  /   _| |_| |\  | |__| |      | |/ ____ \| |_) | |____| |____
|____/|_|  \_\______|   \/  \/   |_____|_| \_|\_____|      |_/_/    \_\____/|______|______|


*/

/* Simple implementation of the BubbleSort algorithm to sort table entries
   on their input. Initially, this only compared text strings, but this
   implementation was adjusted to check for numerical content and parse to
   floats to fix forthcoming bugs.

   Original implementation by W3S:
   Source: https://www.w3schools.com/howto/howto_js_sort_table.asp
*/
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("brewingLogTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {

        // Check if input is numerical
        if (isNaN(x.textContent.toLowerCase())) {
          // If not numerical, compare string values
          if (x.textContent.toLowerCase() > y.textContent.toLowerCase()) {
            // If so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else {
          // If it is numerical, parse as float, then compare.
          if (parseFloat(x.textContent) > parseFloat(y.textContent)) {
            // If so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      } else if (dir == "desc") {

        // Check if input is numerical
        if (isNaN(x.textContent.toLowerCase())) {
          // If not numerical, compare string values
          if (x.textContent.toLowerCase() < y.textContent.toLowerCase()) {
            // If so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else {
          // If it is numerical, parse as float, then compare.
          if (parseFloat(x.textContent) < parseFloat(y.textContent)) {
            // If so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

// Object that stores the stats to the table
let stats = {
  no: [],
  brewName: [],
  styles: [],
  volume: [],
  og: [],
  fg: [],
  abv: [],
  srm: [],
  ibu: [],
  bottleDate: [],
}

function getStatsFromTable() {
  // Check if stats have not yet been retrieved
  if (stats.no.length === 0) {
    tb = brewingLogTable;

    for (rowNo = 1; rowNo < tb.rows.length; rowNo++) {
      // Make DOM call to select all items within the current row
      currentRow = tb.rows[rowNo].getElementsByTagName("td");

      // Push the respective values to the tableStats object
      stats.no.push(currentRow[0].innerHTML);
      stats.brewName.push(currentRow[1].innerHTML);
      stats.styles.push(currentRow[2].innerHTML);
      stats.volume.push(currentRow[3].innerHTML);
      stats.og.push(currentRow[4].innerHTML);
      stats.fg.push(currentRow[5].innerHTML);
      stats.abv.push(currentRow[6].innerHTML);
      stats.ibu.push(currentRow[7].innerHTML);
      stats.srm.push(currentRow[8].innerHTML);
      stats.bottleDate.push(currentRow[9].innerHTML);
    }

  }

}

function filterArrays(arr) {
  arr.filter((item, index) => arr.indexOf(item) === index);
}

function filterStatStyles() {
  stats.styles = stats.styles.filter((item, index) => stats.styles.indexOf(item) === index);
}

function updateTableStats() {
  const statsDOM = document.querySelectorAll('.stat');

  // Omit brew styles that are duplicate
  filterStatStyles();

  // Array that will hold the dynamic stats
  let newStats = [];

  // [0] — 'Number of batches brewed'.
  newStats[0] = stats.no.length;

  // [1] — 'Number of different styles'.
  newStats[1] = stats.styles.length;

  // [2] — 'Highest ABV'.
  newStats[2] = Math.max(... stats.abv);

  // [3] — 'Highest IBU'.
  newStats[3] = Math.max(... stats.ibu);



  for (let i = 0; i < statsDOM.length; i++) {
    // Select the 'number' element within the stats
    let targ = statsDOM[i].querySelectorAll('.number')[0];

    // Update them accordingly
    targ.innerHTML = newStats[i];
  }

}


/*

 _____  ______ _____ _____ _____  ______  _____
|  __ \|  ____/ ____|_   _|  __ \|  ____|/ ____|
| |__) | |__ | |      | | | |__) | |__  | (___
|  _  /|  __|| |      | | |  ___/|  __|  \___ \
| | \ \| |___| |____ _| |_| |    | |____ ____) |
|_|  \_\______\_____|_____|_|    |______|_____/

*/

/* Functionalities that are used in 'recipe' pages */

function makeListsClickable() {
  // Add option to toggle 'completed' list on all 'list' elements in DOM
  document.querySelectorAll('li').forEach(elem => {
    elem.addEventListener('click', event => {
      elem.classList.toggle('completed');
    })
  });

  // Do the same for all 'intermezzo' elements
  document.querySelectorAll('.intermezzo').forEach(elem => {
    elem.addEventListener('click', event => {
      elem.classList.toggle('completed');
    })
  })
}



// Base factor for the recipe ingredient amounts
let currentFactor = 3.8;

// Initiate 'amount' elements, to be updated later:
let amount_38, amount_100, amount_200;

// Function that updates the amounts required to create a batch size. Initial base factor is 3.8.
function updateAmounts(newFactor) {

  let amountValues = document.querySelectorAll('.amount');

  // Select all elements with 'amount' class in DOM. Read their value (innerHTML), and multiply
  // by the new factor. To prevent rounding errors, we round to one decimal.

  document.querySelectorAll('.amount').forEach(elem => {
    let newVal = parseFloat(elem.innerHTML) / currentFactor * newFactor;
    elem.innerHTML = Math.round(newVal * 10) / 10;
  });

  if (newFactor == 3.8) {
    currentFactor = 3.8;

    amount_38.classList.add('active');
    amount_100.classList.remove('active');
    amount_200.classList.remove('active');

  } else if (newFactor == 10.0) {
    currentFactor = 10.0;

    amount_38.classList.remove('active');
    amount_100.classList.add('active');
    amount_200.classList.remove('active');

  } else if (newFactor == 20.0) {
    currentFactor = 20.0;

    amount_38.classList.remove('active');
    amount_100.classList.remove('active');
    amount_200.classList.add('active');
  }

}

function addAmountListeners() {
  amount_38 = document.getElementById('amount_3.8');
  amount_100 = document.getElementById('amount_10');
  amount_200 = document.getElementById('amount_20');

  amount_38.addEventListener('click', function() { updateAmounts(3.8) });
  amount_100.addEventListener('click', function() { updateAmounts(10) });
  amount_200.addEventListener('click', function() { updateAmounts(20) });
}


function updateSrmColour() {
  let srmRow = document.getElementById('srmRow');
  let srmCell = document.getElementById('srm');
  let sVal = srmCell.innerHTML;

  const srmColours = ["light-yellow", "straw", "pale", "gold", "amber", "copper", "light-brown", "brown", "dark-brown", "black", "other"];
  // const srmColours = ["hsl(56, 97%, 88%)", "hsl(49, 100%, 74%)", "hsl(45, 99%, 69%)", "hsl(43, 80%, 59%)", "hsl(34, 66%, 52%)", "hsl(30, 64%, 46%)", "hsl(25, 76%, 31%)", "hsl(19, 84%, 25%)", "hsl(2, 95%, 15%)", "hsl(359, 96%, 10%)", "hsl(0, 0%, 100%)"];

  if (sVal <= 2) {
    srmRow.className = srmColours[0];
  } else if (sVal <= 3) {
    srmRow.className = srmColours[1];
  } else if (sVal <= 4) {
    srmRow.className = srmColours[2];
  } else if (sVal <= 6) {
    srmRow.className = srmColours[3];
  } else if (sVal <= 9) {
    srmRow.className = srmColours[4];
  } else if (sVal <= 12) {
    srmRow.className = srmColours[5];
  } else if (sVal <= 15) {
    srmRow.className = srmColours[5];
  } else if (sVal <= 20) {
    srmRow.className = srmColours[6];
  } else if (sVal <= 30) {
    srmRow.className = srmColours[7];
  } else if (sVal <= 40) {
    srmRow.className = srmColours[8];
  } else if (sVal >= 40) {
    srmRow.className = srmColours[9];
  } else {
    srmRow.className = srmColours[10];
  }
}

function updateBeerHaziness() {
  let hazy = document.getElementById('hazy');
  let haziness = document.getElementById('haziness');

  if (haziness.innerHTML == 'Slight Haze') {
    hazy.className = 'light-haze';
  } else if (haziness.innerHTML == 'Hazy') {
    hazy.className = 'hazy';
  }
}

/*

 ____  _      ____   _____
|  _ \| |    / __ \ / ____|
| |_) | |   | |  | | |  __
|  _ <| |   | |  | | | |_ |
| |_) | |___| |__| | |__| |
|____/|______\____/ \_____|


*/

/* Functionalities that are used on blog pages */


// Function that counts the amount of words in a string
function countWords(string) {
  return string.split(' ').length;
}

// Reading Time = Amount of Words / Reading Speed per Minute. (Rounded down to the minute)
function calcReadingTime() {
  // Get the DOM element that will have the dynamic amount of minutes
  const readingTimeDOM = document.getElementById('readingTime');

  // Humans read around 200 to 250 words per minute
  const readingSpeed = 200;

  // We want to only count the words that are in the actual article.
  let blogArticle = document.querySelector('.blog-article');
  let totalWords = blogArticle.innerText;

  // Calculate the reading time
  let readingTime = Math.round( countWords(totalWords) / readingSpeed );

  // Finally, update the innerHTML of the reading time DOM element.
  readingTimeDOM.innerHTML = readingTime;
}

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - -*/
/* Functionality: Automatically updating the page's title */
function updatePageTitle() {
  let articleTitle = document.querySelector('h1').innerHTML;
  let standardTitle = "Bloggerij Geel — "

  document.title = `${standardTitle}${articleTitle}`;
}
/*

 _   _     __      ______          _____
| \ | |   /\ \    / /  _ \   /\   |  __ \
|  \| |  /  \ \  / /| |_) | /  \  | |__) |
| . ` | / /\ \ \/ / |  _ < / /\ \ |  _  /
| |\  |/ ____ \  /  | |_) / ____ \| | \ \
|_| \_/_/    \_\/   |____/_/    \_\_|  \_\


*/

function toggleSubmenu(targ) {
  /* Find the clicked item */
  const newTarget = targ.parentElement;

  // If the target submenu is already open:
  if (newTarget.classList.contains('active')) {
    // Close it.
    newTarget.classList.remove('active');
  } else {
    // Otherwise: ensure all other submenus are closed...
    closeAllMenus();

    // ... and open this submenu
    newTarget.classList.add('active');
  }
}

function closeAllMenus() {
  // Close all desktkop-based nav menus
  const submenuWrappers = document.querySelectorAll('.navbar__link-parent');

  for (let i = 0; i < submenuWrappers.length; i++) {
    if (submenuWrappers[i].classList.contains('active')) {
      submenuWrappers[i].classList.remove('active');
    }
  }

  // Also close all mobile-based nav menus
  const hamburger = document.querySelector('.navbar__hamburger');
  const navbar = document.querySelector('.navbar');

  if (hamburger.classList.contains('active')) {
    hamburger.classList.remove('active');
  }

  if (navbar.classList.contains('active')) {
    navbar.classList.remove('active');
  }

}

function toggleHamburger(target) {
  // Change the hamburger's DOM status
  if (target.classList.contains('active')) {
    target.classList.remove('active');
  } else {
    target.classList.add('active');
  }

  const parent = target.parentElement;
  // Also change the nav
  if (parent.classList.contains('active')) {
    parent.classList.remove('active');
  } else {
    parent.classList.add('active');
  }
}

function underConstruction(description) {
  alert(`Hi there! This project is under continuous development, and we are updating the very thing you tried to access. \n \nThe '${description}' feature should be live soon!`)
  // closeAllMenus();
}

/*

 ____ _______ _    _ ______ _____   _____
/ __ \__   __| |  | |  ____|  __ \ / ____|
| |  | | | |  | |__| | |__  | |__) | (___
| |  | | | |  |  __  |  __| |  _  / \___ \
| |__| | | |  | |  | | |____| | \ \ ____) |
\____/  |_|  |_|  |_|______|_|  \_\_____/

*/

function scrollToTop() {

  // SWUP Animation duration: {opacity: .3s} {transform: .4s}
  const htmlDOM = document.querySelector('html');

  // Temporarily remove smoothscroll behavior
  htmlDOM.style.scrollBehavior = 'auto';

  // Reset the scroll amount
  document.body.scrollTop = 0; // Safari
  document.documentElement.scrollTop = 0; // Chrome, FireFox, IE

  // Reintroduce the smooth scroll behavior
  htmlDOM.style.scrollBehavior = 'smooth';
}

function createDisqusThread() {
  let d = document;
  let s = d.createElement('script');
  s.src = 'https://brouwerijgeel-nl.disqus.com/embed.js';
  s.setAttribute('data-timestamp', + new Date());
  (d.head || d.body).appendChild(s);
}

/* Tool-related things */
function updateABV() {
  // Grab latest values from the form
  const OG = inputOG.value;
  const FG = inputFG.value;
  const outputABV = document.getElementById('abv');

  // Calculate the new ABV
  let newABV = calculateABV(OG, FG);
  let fontSize = 1 + newABV / 150;

  // Update the ABV's text accordingly
  outputABV.innerText = newABV;
  outputABV.style.fontSize = `${fontSize}em`;

  // outputABV.style.fontSize = `1${newABV}`
  outputABV.title = 'ABV estimated through measurements of original- and final specific gravities.';
  // outputABV.ariaLabel = 'ABV estimated through measurements of original- and final specific gravities.';

  if (newABV >= 0) {
    outputABV.classList = "";
  } else {
    outputABV.classList = "impossible";

    // outputABV.ariaLabel = 'Interesting thought, but a negative amount of alcohol simply is not possible. \n\n You should either raise your OG, lower your FG, or a combination of both.'
    outputABV.title = 'Interesting thought, but a negative amount of alcohol simply is not possible. \n\n You should either raise your OG, lower your FG, or a combination of both.';
  }

  // Add small animation as augmented feedback
  const abvWindow = outputABV.parentElement.parentElement;
  abvWindow.style.transform = 'scale(1.035)';
  abvWindow.style.backgroundColor = 'rgba(255,255,255,.4)';
  abvWindow.style.boxShadow = '0 2px 2px hsla(38,20%,60%,.08), 0 4px 4px hsla(38,20%,60%,.12), 0 8px 8px hsla(38,20%,60%,.12), 0 16px 16px hsla(38,20%,60%,.12)';

  setTimeout(function() {
    abvWindow.style.transform = 'scale(1)';
    abvWindow.style.backgroundColor = 'transparent';
    abvWindow.style.boxShadow = 'none';
  }, 100)
}

function abvPreset(newOG, newFG) {
  // Update OG and FG
  updateGravity(inputOG, newOG)
  updateGravity(inputFG, newFG)
  // Update resulting ABV
  updateABV();
}

function updateGravity(target, newValue) {
  target.value = newValue;
}

function clickTablePreset(target) {
  let newOG = target.children[1].innerText;
  let newFG = target.children[2].innerText;

  abvPreset(newOG, newFG);
}

// Function that calculates ABV based on original gravity and final gravity.
// ABV = ((( OG - FG ) * 1.05 ) / FG ) / 0.79
function calculateABV(OG, FG) {
  const ethanolWeight = 1.05;
  const ethanolDensity = 0.79;

  // Calculate ABV in fractions
  let ABV = (((OG - FG) * ethanolWeight) / FG) / ethanolDensity;

  // Convert into percentages, round to two decimals
  return (ABV * 100).toFixed(1);
}




/* Recipes landing page functions */
/* Checks if element (el) is currently in the viewport */
function isElementInViewport(el) {
  let rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function checkIfInView() {

  for (var i = 0; i < timelineItems.length; i++) {
    if (isElementInViewport(timelineItems[i])) {
      if(!timelineItems[i].classList.contains("in-view")){
        timelineItems[i].classList.add("in-view");
      }
    } else if(timelineItems[i].classList.contains("in-view")) {
        timelineItems[i].classList.remove("in-view");
    }
  }
}


/* Cookie functionalities */

function setCookie(cname, cvalue, exdays) {
  let d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) === 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkPreferences() {
  let cookiePreferences = getCookie("cookiePreferences");
  if (cookiePreferences === "functional" || cookiePreferences === "all") {
    // Do nothing. Cookies are properly set.

    console.log(`Your cookie preferences are '${getCookie("cookiePreferences")} cookies'.`);
  } else {
    // Cookies improperly set. Eventually this should summon a modal / popup / snackbar, but now we will just auto set the cookie to an acceptable minimum.
    updateCookiePreferences("functional");
    cookiePreferences = "functional";
    console.log(`Oops, something went wrong. Your cookie preferences are now '${getCookie("cookiePreferences")} cookies'.`);
  }

  // Check if we're on the /privacy page
  if (document.querySelectorAll('.privacy')[0] !== undefined) {
    // If so: update the user's selected state.
    const formInput = document.querySelector('form').querySelectorAll('input');
    if (cookiePreferences === "functional") {
      formInput[0].checked = true;
    } else {
      formInput[1].checked = true;
    }
  }
}

function updateCookiePreferences(pref) {
  if (pref === "functional" || pref === "all") {
    // Set a cookie for one year
    setCookie("cookiePreferences", pref, 365);
    console.log(`Your cookie preferences are now '${getCookie("cookiePreferences")} cookies'.`);
  } else {
    alert("Stop trying to cheat the system. We have back-end validation in place too. We will reset you to the functional cookie settings.");
    setCookie("cookiePreferences", "functional", 365);
  }
}

function isIE() {
  return /Trident\/|MSIE/.test(window.navigator.userAgent);
}
