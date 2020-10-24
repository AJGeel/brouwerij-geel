<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Brouwerij Geel &mdash; Nano-Brewery from Utrecht</title>
    <meta name="description" content="Brouwerij Geel is an independent nano-brewery based in Utrecht, the Netherlands. We have been brewing ciders & beers since 2017, and we occasionally dabble in wine-making too!">
    <meta name="keywords" content="Brouwerij Geel, Brouwerij, Geel, Arthur Geel, Beer, Cider, Homebrewing, Homebrew, Alcohol, Brewery, Nano Brewery, Design">
    <meta name="author" content="Arthur Geel, hello@arthurgeel.com">

    <?php include '../../links.php' ?>

    <style media="screen">
      .my-20 {
        margin-top: 20em;
        margin-bottom: 20em;
      }

      .mt-2 {
        margin-top: 2em;
      }

      .mt-4 {
        margin-top: 4em;
      }

      ul.no-hover>li:hover {
        background: none;
        cursor: initial;
      }

      .tool__breadcrumbs {
        display: flex;
        font-family: 'Sen', sans-serif;
        margin: 2em 0;
      }

      .tool__breadcrumbs p {
        margin-right: 1em;
      }

      .tool__breadcrumbs p::after {
        content: '>';
        margin-left: 1em;
        opacity: .5;
      }

      .tool__breadcrumbs p:last-child::after {
        content: none;
      }

      .tool__wrapper {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-top: 4em;

        animation: fadeIn 2s ease-in-out;
      }

      .tool__wrapper > div {
        max-width: 50%;
      }

      .tool__wrapper > div.full-width {
        max-width: 100%;
      }

      .tool__description {
        margin-right: 2em;
      }

      .tool__description p, .tool__description a {
        margin-bottom: 1rem;
        display: inline-block;
      }

      .tool__header {
        font-size: 1.6em;
        font-family: 'Sen', sans-serif;
        margin-bottom: .6rem;
      }

      .abv-calculator {
        flex-shrink: 0;
        font-family: 'Sen', sans-serif;
        font-size: 1.1em;

        border-left: 1px solid transparent;
        border-right: 1px solid transparent;

        transition: border .2s ease-in-out, transform .1s ease-in-out, background-color .1s ease-in-out, box-shadow .1s ease-in-out;
      }

      .abv-calculator:hover {
        border-left: 1px solid var(--royal-gold);
        border-right: 1px solid var(--royal-gold);
      }

      .abv-calculator__row {
        display: flex;
        width: 100%;
        padding: 1em;
        justify-content: space-between;
        align-items: center;
        transition: background-color .2s ease-in-out;
        border-top: 1px solid var(--royal-gold);
        border-bottom: 1px solid transparent;
        transition: border .2s ease-in-out;
      }

      .abv-calculator__row:last-child {
        border-bottom: 1px solid var(--royal-gold);
      }

      .abv-calculator__row:nth-child(2n) {
        background-color: var(--royal-gold-select);
      }

      .abv-calculator input {
        background-color: #fff;
        box-shadow: 0 1px 1px hsla(38,20%,60%,.08), 0 2px 2px hsla(38,20%,60%,.12);
      }

      .abv-calculator input, #abv {
        width: 100px;
        font-size: 1em;
        font-family: 'Sen', sans-serif;
        margin-left: 2em;
        text-align: center;
        padding: .5em;
        box-sizing: border-box;
        border: none;
        border-radius: 2px;
        line-height: 1.5;
      }

      #abv {
        transition: color .1s ease-in-out, background-color .1s ease-in-out;
      }

      #abv::after {
        content: '%';
      }

      #abv::before {
        content: none;
        background-color: hsl(23deg 97% 42%);
        width: 20px;
        height: 20px;
        display: inline-block;
        border-radius: 100px;
        font-size: .8em;
        font-weight: bold;
        color: #fff;
        margin-right: .5em;

        opacity: 0;
        transform: scale(0);
        transition: opacity .1s ease-in-out, transform .1s ease-in-out;
      }

      #abv.impossible {
        color: hsl(23deg 97% 42%);
        background-color: hsl(23 96% 42% / .15);
        cursor: help;
      }

      #abv.impossible::before {
        content: 'i';
        opacity: 1;
        transform: scale(1);
      }

      .formula {
        background-color: #fff;
        padding: 2rem;
        text-align: center;

        display: none;
        margin-top: 1rem;
        margin-bottom: 2rem;
        font-style: italic;
        box-shadow: 0 1px 1px hsla(38,20%,60%,.08), 0 2px 2px hsla(38,20%,60%,.12), 0 4px 4px hsla(38,20%,60%,.16), 0 8px 8px hsla(38,20%,60%,.20);
        border-radius: 4px;
      }

      .formula .header {
        font-family: 'Sen', sans-serif;
        font-style: normal;
        margin-bottom: 2rem;
        font-size: 1rem;
        font-weight: 500;
        opacity: .7;
      }

      .formula p:last-child {
        margin-bottom: 0;
      }

      .formula span {
        padding: .25rem;
        border-radius: 2px;
      }

      .formula reg {
        font-style: normal;
        margin-right: 2rem;
        opacity: .7;
        font-family: 'Sen', sans-serif;
      }

      .formula span:hover {
        background-color: var(--royal-gold-select);
      }

      #formulaLink {
        text-decoration: underline;
        cursor: pointer;
        color: var(--royal-gold-dark);
      }

      .fade-in {
        animation: fadeIn 2s ease-in-out;
      }

      .light-bg {
        background-color: var(--royal-gold-select);
      }

      .mw-half {
        max-width: 50%;
      }

      .tool-table, .tool-table td {
        text-align: left;
        transition: transform .2s ease-in-out;
      }

      .tool-table thead tr:nth-child(2n-1) {
        background-color: transparent;
        font-weight: bold;
      }

      .tool-table th {
        cursor: initial;
      }

      .tool-table tr:nth-child(2n-1) {
        background-color: hsla(0,0%,100%,.5);
      }

      .tool-table tr:hover {
        background-color: #fff;
        cursor: pointer;
      }

      .tool-table tr:hover td {
        transform:translateX(.4em);
      }

      .tool-table tr:active td {
        transform:translateX(.3em);
        opacity: .5;
        transition: transform .1s ease-in-out, opacity .1s ease-in-out;
      }

      .tool-table tr>td:nth-child(4)::after {
        content: "%";
      }

      .tool-table td:first-child {
        font-style: italic;
      }

    </style>

  </head>
  <body>

    <?php include('../../nav.php'); ?>

    <main id="swup" class="swup-transition-main">

      <div class="container limit-width">
        <div class="tool__breadcrumbs">
          <p><a href="/tools/">Tools</a></p>
          <p>Alcohol by Volume (ABV) Calculator</p>
        </div>

        <div class="tool__wrapper">
          <div class="tool__description">
            <h2 class="tool__header">Alcohol by Volume (ABV) Calculator</h2>
            <p>This tool helps you find the Alcohol by Volume (ABV) of your brew based on change in specific gravity. If you took hydrometer readings before the fermentation started <i>(Original Gravity: OG)</i> and once it ended <i>(Final Gravity: FG)</i>, you can use a formula to calculate the resulting alcohol.</p>
            <div class="formula">
              <p class="formula__row header">Formula for calculating Alcohol by Volume (ABV, %) </p>
              <p class="formula__row"><span>ABV</span> = (((<span>OG</span> - <span>FG</span>) * <span>M(C<sub>2</sub>H<sub>6</sub>O)</span> ) / <span>FG</span> ) / <span>&rho;(C<sub>2</sub>H<sub>6</sub>O)</span></p>
              <p class="formula__row"><reg>Where</reg><span>M(C<sub>2</sub>H<sub>6</sub>O)</span> = <span>weight of ethyl-alcohol</span> = <span>1.05</span> (const.) ,</p>
              <p class="formula__row"><reg>And</reg><span>&rho;(C<sub>2</sub>H<sub>6</sub>O)</span> = <span>density of ethyl-alcohol</span> = <span>0.79</span> (const.)</p>
            </div>
            <a id="formulaLink">🤔 Remind me of that formula again...</a>
          </div>
          <div class="tool abv-calculator">
            <div class="abv-calculator__row">
              <label for="inputOG">Original Gravity (OG):</label>
              <input type="number" name="OG" id="inputOG" value="1.050" step="0.001" min="0.900" max="1.200" onchange="updateABV()" autofocus>
            </div>
            <div class="abv-calculator__row">
              <label for="inputFG">Final Gravity (FG):</label>
              <input type="number" name="FG" id="inputFG" value="1.000" step="0.001" min="0.900" max="1.200" onchange="updateABV()">
            </div>
            <div class="abv-calculator__row">
              <label for="">Alcohol by Volume:</label>
              <p id="abv" title="ABV estimated through measurements of original- and final specific gravities.">0.00</p>
            </div>
          </div>
        </div>

      </div>

      <div class="container light-bg fade-in">
        <section class="limit-width">
          <h2 class="tool__header">Common specific gravity ranges</h2>
          <p class="mw-half">Experimenting is fun and all, but most of the times we just follow recipes &mdash; or at least base our reasoning on existing recipes. The table below contains a number of popular brewing styles and their characteristics. You may click them to transfer their data to the calculator.</p>
          <table class="mt-4 tool-table">
            <thead>
              <tr>
                <th>Brewing Style</th>
                <th>Original Gravity (OG)</th>
                <th>Final Gravity (FG)</th>
                <th>Alcohol by Volume (ABV)</th>
              </tr>
            </thead>
            <tbody>
              <tr onclick="clickTablePreset(this)">
                <td>Pilsener</td>
                <td>1.048</td>
                <td>1.010</td>
                <td>5.0</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>American IPA</td>
                <td>1.070</td>
                <td>1.010</td>
                <td>7.9</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Cidre Brut</td>
                <td>1.045</td>
                <td>0.995</td>
                <td>6.7</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Cidre Doux</td>
                <td>1.050</td>
                <td>1.025</td>
                <td>3.2</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Weißbier</td>
                <td>1.045</td>
                <td>1.014</td>
                <td>4.1</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>English Barleywine</td>
                <td>1.100</td>
                <td>1.018</td>
                <td>10.7</td>
              </tr>
              <tr onclick="clickTablePreset(this)">
                <td>Imperial Stout</td>
                <td>1.110</td>
                <td>1.025</td>
                <td>11.0</td>
              </tr>

            </tbody>
          </table>
        </section>
      </div>

      <?php include('../../footer.php'); ?>

    </main>

    <?php include('../../scripts.php'); ?>

    <script type="text/javascript">
    const inputOG = document.getElementById('inputOG');
    const inputFG = document.getElementById('inputFG');
    const outputABV = document.getElementById('abv');

    const formulaLink = document.getElementById('formulaLink');
    const formulaBox = document.querySelector('.formula');

    formulaLink.addEventListener('click', function() {
      if (formulaLink.innerText === '🤔 Remind me of that formula again...') {
        console.log('show formula');
        formulaBox.style.display = 'block';
        formulaLink.innerText = "I've had enough.. no more physics for me! 😱";
      } else {
        console.log('hide formula');
        formulaBox.style.display = 'none';
        formulaLink.innerText = "🤔 Remind me of that formula again...";
      }
    })

      function updateABV() {
        // Grab latest values from the form
        let OG = inputOG.value;
        let FG = inputFG.value;

        // Calculate the new ABV
        let newABV = calculateABV(OG, FG);

        // Update the ABV's text accordingly
        outputABV.innerText = newABV;
        outputABV.title = 'ABV estimated through measurements of original- and final specific gravities.';

        if (newABV >= 0) {
          outputABV.classList = "";
        } else {
          outputABV.classList = "impossible";

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

      updateABV();
    </script>

  </body>
</html>
