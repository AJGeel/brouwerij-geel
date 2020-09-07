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

makeListsClickable();
addAmountListeners();
updateSrmColour();
updateBeerHaziness();
