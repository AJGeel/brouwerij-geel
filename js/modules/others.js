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
