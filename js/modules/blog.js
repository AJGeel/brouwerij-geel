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
  readingTimeDOM.innerHTML = calcReadingTime();
}

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - -*/
/* Functionality: Automatically updating the page's title */
function updatePageTitle() {
  let articleTitle = document.querySelector('h1').innerHTML;
  let standardTitle = "Bloggerij Geel — "

  document.title = `${standardTitle}${articleTitle}`;
}
