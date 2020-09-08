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
      stats.abv.push(currentRow[3].innerHTML);
      stats.ibu.push(currentRow[4].innerHTML);
      stats.srm.push(currentRow[5].innerHTML);
      stats.bottleDate.push(currentRow[5].innerHTML);
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
