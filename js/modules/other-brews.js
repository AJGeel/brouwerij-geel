// Immutable array of all other brews
const allOtherBrews = [
  `<a href="/recipes/ipa-pocalypse.html" class="carrousel--cell">
    <img class="brew-label" src="/i/labels/ipa-pocalypse.jpg" alt="IPA—Pocalypse label">
    <h3>Red Beet IPA &mdash; ABV: 7.4%</h3>
    <p>March 18<sup>th</sup>, 2020</p>
  </a>`,

  `<a href="/recipes/gembier.html" class="carrousel--cell">
    <img class="brew-label" src="/i/labels/gembier.jpg" alt="Gembier label">
    <h3>Ginger Beer  &mdash; ABV: 6.2%</h3>
    <p>February 25<sup>th</sup>, 2020</p>
  </a>`,

  `<a href="/recipes/kiki-cheeky-kriekie.html" class="carrousel--cell">
    <img class="brew-label" src="/i/labels/kiki-cheeky-kriekie.jpg" alt="Kiki's Cheeky Kriekie label">
    <h3>Cherry Cider &mdash; ABV: 5.9%</h3>
    <p>October 21<sup>th</sup>, 2019</p>
  </a>`,

  `<a href="/recipes/chateau-jaune.html" class="carrousel--cell">
    <img class="brew-label no-padding" src="/i/labels/chateau-jaune.jpg" alt="Château Jaune label">
    <h3>Red Wine &mdash; ABV: 7.9%</h3>
    <p>February 28<sup>th</sup>, 2020</p>
  </a>`,

  `<a href="/recipes/toffee-apple.html" class="carrousel--cell">
    <img class="brew-label" src="/i/labels/toffee-apple.jpg" alt="Toffee Apple Cider label">
    <h3>Toffee Cider &mdash; ABV: 4.5%</h3>
    <p>December 7<sup>th</sup>, 2017</p>
  </a>`,

  `<a href="/recipes/dry-hopped-cider.html" class="carrousel--cell">
    <img class="brew-label" src="/i/labels/dry-hopped-cider.jpg" alt="Dry-Hopped Cider label">
    <h3>Dry-Hopped Cider &mdash; ABV: 5.3%</h3>
    <p>September 18<sup>th</sup>, 2019</p>
  </a>`,

  `<a href="/recipes/hefeweizen.html" class="carrousel--cell">
    <img class="brew-label no-padding" src="/i/labels/hefeweizen.jpg" alt="Hefeweizen label">
    <h3>Hefeweizen &mdash; ABV: 6.0%</h3>
    <p>April 25<sup>th</sup>, 2020</p>
  </a>`
];

// To contain a copy of the brews, will be edited.
let otherBrews = [];

/* Function that checks if current page has brew associated with it. If so, it removes it from the suggestions. */
function removeCurrentBrew() {

  try {
    if (currentBrew != null) {
      // If there is an active current brew, we remove it from the array
      otherBrews.splice(currentBrew, 1);
    }
  } catch(error) {
    /* currentBrew may not be defined, which is why this try---catch block is in place. */
  }
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

/* Function that grabs a number of brews, and updates the Carrousel */
function updateBrewSelection() {
  // Make mutable copy of master elements
  otherBrews = allOtherBrews;

  // Remove current brew (if applicable)
  removeCurrentBrew();

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
