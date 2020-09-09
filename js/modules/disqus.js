/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */

let disqus_config = function () {
  this.page.url = 'https://brouwerijgeel.nl';
  this.page.identifier = window.location.pathname;
};

function createDisqusThread() {
  let d = document;
  let s = d.createElement('script');
  s.src = 'https://brouwerijgeel-nl.disqus.com/embed.js';
  s.setAttribute('data-timestamp', + new Date());
  (d.head || d.body).appendChild(s);
}
