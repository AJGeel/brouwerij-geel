// Make a reference to the slider track
const track = document.querySelector('.slider__track');

function cloneLabels(target) {
  // Make constant reference to prevent infinite loop
  const trackItems = target.children;

  // Go through all elements
  for (const el of trackItems) {
    console.log(el)

    // Clone them:
    // const cln = clone(el);
    // console.log(cln);

    // Add to the end of track
    // append(target, cln);
  }
}

/* Clones a DOM element and its children */
function clone(item) {
  return item.cloneNode(true);
}

/* Appends a bit of HTML to the end of a DOM target */
function append(target, item) {
  target.appendChild(item);
}


cloneLabels(track);
