/* Courtesy of Dev.to: https://dev.to/nitdgplug/learn-javascript-through-a-game-1beh?ck_subscriber_id=997169940 */

/* Global vars — setup */
const snakeCanvas = document.getElementById('game-area');
let width, height, tileSize, scale, fps;
let ctx;
let snake;
let score, isPaused, step;
let gameOver = false;
let lWidth;
let inputPending;

let fontSize, fontFamily;

let gold, darkGold, lightGold;

let chomps_1, chomps_2, chomps_3, chomps_4, burp, boom;

let hiHat, snare, kick;

/* Snake game */
// Initialize game objects
function init() {
  // Key game setup
  scale = 2;
  tileSize = scale * 20;
  fps = 13;
  score = 0;
  isPaused = false;
  lWidth = 1;
  step = 0;

  // Font
  fontSize = scale * 30;
  fontFamily = 'Sen';

  // Colours
  gold = 'hsla(38 40% 60% / 1)';
  // gold = 'hsl(302deg 91% 79%)'; /* Nienke Roze */
  darkGold = '#423724';
  lightGold = 'hsl(38deg 100% 90%)';
  // lightGold = 'hsl(302deg 100% 90%)'; /* Nienke Roze */

  // SFX
  chomps_1 = new sound('sounds/s_chomps_1.mp3', 1);
  chomps_2 = new sound('sounds/s_chomps_2.mp3', 1);
  chomps_3 = new sound('sounds/s_chomps_3.mp3', 1);
  chomps_4 = new sound('sounds/s_chomps_4.mp3', 1);
  burp = new sound('sounds/s_burp.mp3', .7);
  boom = new sound('sounds/s_boom.mp3', .7);

  hiHat = new sound('sounds/s_hiHat.mp3', .1);
  kick = new sound('sounds/s_kick.mp3', .7);
  snare = new sound('sounds/s_snare.mp3', .7);


  // Full-screen canvas:
  // width = tileSize * Math.floor(window.innerWidth / tileSize);
  // height = tileSize * Math.floor(window.innerHeight / tileSize);

  // Dynamically control the size of the canvas
  const adm = document.querySelectorAll('.angel-di-maria')[0];
  const padding = 64;
  if (!gameOver) {
    width = scale * ( tileSize * Math.floor((adm.offsetWidth - 2*padding) / tileSize) );
    height = scale * ( tileSize * Math.floor(adm.offsetHeight / tileSize) );

    snakeCanvas.width = width;
    snakeCanvas.height = height;
  }
  ctx = snakeCanvas.getContext('2d');

  snake = new Snake({
    x: tileSize * Math.floor(width / (2 * tileSize)),
    y: tileSize * Math.floor(height / (2 * tileSize)) },
    `${gold}`
  );

  food = new Food(spawnLocation(), `${lightGold}`);

  // Finally, reset the gameOver variable
  gameOver = false;
}

// The actual game function
function game() {
  // Remove snakeCanvas CSS modifiers (if any)
  snakeCanvas.className = ""

  // Initialize game
  init();

  // Start update loop
  update();
}

// The game loop: updating the position and redrawing of game objects
function update() {
  if (isPaused) {
    return;
  }

  if (gameOver) {
    boom.play();
    snakeCanvas.classList.add('rip');
    ctx.textAlign = "center";
    ctx.font = `${fontSize}px ${fontFamily}`;
    ctx.fillStyle = `${darkGold}`;
    ctx.strokeStyle = `${gold}`;
    ctx.lineWidth = 10;
    ctx.strokeText("GAME OVER", width / 2, height / 2);
    ctx.fillText("GAME OVER", width / 2, height / 2);

    ctx.font = `${fontSize*.667}px ${fontFamily}`;
    ctx.fillText("Click anywhere on the canvas to try again...", width / 2, height / 2 + fontSize);
    return;
  }

  if (snakeCanvas.classList.contains('paused')) {
    snakeCanvas.classList.remove('paused');
  }

  inputPending = false;

  if (snake.die()) {
    gameOver = true;
  }

  snake.border();

  if (snake.eat()) {
    // Add small screen shake
    snakeCanvas.classList.add('chomp');
    setTimeout(function() {
      snakeCanvas.classList.remove('chomp');
    }, 350);

    let rand = Math.random();
    if (rand <= .25) {
      chomps_1.play();
    } else if (rand <= .50) {
      chomps_2.play();
    } else if (rand <= .75) {
      chomps_3.play();
    } else {
      chomps_4.play();
    }

    let rand2 = Math.random();
    if (rand2 <= .25) {
      setTimeout(function (){
        // Add medium screen shake
        snakeCanvas.classList.add('burp');
        burp.play();
      }, 400);

      setTimeout(function() {
        snakeCanvas.classList.remove('burp');
      }, 800);
    }

    food = new Food(spawnLocation(), `${lightGold}`);
    score += 10;

    if (score % 20 == 0) {
      // Gradually speed up
      fps++;
    }
  }

  // Clearing the canvas for redrawing.
  ctx.clearRect(0, 0, width, height);

  food.draw();
  try {
    yeet.draw();
  } catch(err) {

  }
  snake.draw();
  snake.move();

  // drumAndBass();

  step++;
  showScore();

  setTimeout(update, 1000/fps);
}

// Showing the score of the player
function showScore() {
  ctx.textAlign = "center";
  ctx.font = `${fontSize}px ${fontFamily}`;
  ctx.fillStyle = `${darkGold}`;
  ctx.fillText("Score: " + score, width / 2, 2 * fontSize);
}

// Generates drum and bass rhythm based on step count
function drumAndBass() {
  // Hi-hat
  if (step % 2 === 0) {
    hiHat.play();
  }

  // Kick
  if (step % 16 === 0 || step % 16 === 10) {
    kick.play();
  }

  // Snare
  if (step % 8 === 4) {
    snare.play();
  }
}

// Showing if the game is paused.
function showPaused() {
  // Play pause sound

  ctx.textAlign = "center";
  ctx.font = `${fontSize * .677}px ${fontFamily}`;
  ctx.fillStyle = `${darkGold}`;
  ctx.fillText("Paused — press 'spacebar' to continue.", width / 2, height / 2);
  snakeCanvas.classList.add('paused');
}

// Determining a random spawn location on the grid
function spawnLocation() {
  // Breaking the entire snakeCanvas into a grid of tiles
  // let rows = width / tileSize;
  // let cols = height / tileSize;
  //
  // let xPos, yPos;
  //
  // generateXY(rows, cols);
  //
  // return {
  //   x: xPos,
  //   y: yPos
  // };

  let rows = width / tileSize;
  let cols = height / tileSize;

  let xPos, yPos;

  xPos = Math.floor(Math.random() * rows) * tileSize;
  yPos = Math.floor(Math.random() * cols) * tileSize;

  return {x: xPos, y: yPos };
}

function generateXY(rows, cols) {
  xPos = Math.floor(Math.random() * rows) * tileSize;
  yPos = Math.floor(Math.random() * cols) * tileSize;

  // Check for potential collision. If so: run function again.
  if (checkCollision(xPos, yPos)) {
    generateXY(rows, cols);
  }

  return { xPos, yPos }
}

function checkCollision(x, y) {
  for (let i = 0; i < snake.tail.length; i++) {
    if (Math.abs(x - snake.tail[i].x) < tileSize && Math.abs(y - snake.tail[i].y) < tileSize) {
      console.log("COLLISION");
      return true;
    }

    return false;
  }
}


function sound(src, volume) {
  this.sound = document.createElement("audio");
  this.sound.src = src;
  this.sound.setAttribute("preload", "auto");
  this.sound.setAttribute("controls", "none");
  this.sound.style.display = "none";
  this.sound.volume = volume;
  document.body.appendChild(this.sound);

  this.play = function() {
    // Reset
    this.reset();
    this.sound.play();
  }

  this.reset = function() {
    this.sound.pause();
    this.sound.currentTime = 0;
  }
}

class Food {
  // Initialize object properties
  constructor(pos, color) {
    this.x = pos.x;
    this.y = pos.y;
    this.color = color;
  }

  draw() {
    // Main circle
    ctx.beginPath();
    ctx.arc(this.x + tileSize / 2, this.y + tileSize / 2, tileSize / 2, 0, 2*Math.PI);
    ctx.fillStyle = this.color;
    ctx.fill();
    ctx.strokeStyle = `${darkGold}`;
    ctx.lineWidth = lWidth;
    ctx.stroke();
    ctx.closePath();
  }
}

class Snake {
  // Initialize object properties
  constructor(pos, color) {
    this.x = pos.x;
    this.y = pos.y;
    this.tail = [{ x: pos.x - tileSize, y: pos.y }, {x: pos.x - tileSize * 2, y: pos.y }];
    this.velX = 1;
    this.velY = 0;
    this.color = color;
  }

  draw() {
    // Head
    ctx.beginPath();
    ctx.arc(this.x + tileSize / 2, this.y + tileSize / 2, tileSize / 2, 0, 2*Math.PI);
    ctx.fillStyle = this.color;
    ctx.fill();
    ctx.strokeStyle = `${darkGold}`;
    ctx.lineWidth = lWidth;
    ctx.stroke();
    ctx.closePath();

    // Eye
    ctx.beginPath();
    ctx.arc(this.x + tileSize / 2, this.y + tileSize / 2, tileSize / 6, 0, 2 * Math.PI);
    ctx.fillStyle = `${darkGold}`;
    ctx.fill();
    ctx.closePath();

    // Tail
    for (let i = 0; i < this.tail.length; i++) {
      // Body Part
      ctx.beginPath();
      ctx.arc(this.tail[i].x + tileSize / 2, this.tail[i].y + tileSize / 2, tileSize / 2, 0, 2*Math.PI);
      ctx.fillStyle = 'hsl(38 40% ' + (60 - 2*i) + '%)';
      // ctx.fillStyle = 'hsl(302 91% ' + (79 - 2*i) + '%)'; /* Nienke roze */
      ctx.fill();
      ctx.strokeStyle = `${darkGold}`;
      ctx.lineWidth = lWidth;
      ctx.stroke();
      ctx.closePath();
    }
  }

  move() {
    // Tail movement
    for (let i = this.tail.length - 1; i > 0; i--) {
      this.tail[i] = this.tail[i-1];
    }

    // Updating the start of the tail to acquire the position of the head
    if (this.tail.length != 0) {
      this.tail[0] = {
        x: this.x,
        y: this.y
      };
    }

    // Head movement
    this.x += this.velX * tileSize;
    this.y += this.velY * tileSize;
  }

  // Changing the direction
  dir(dirX, dirY) {
    this.velX = dirX;
    this.velY = dirY;
  }

  // Determining whether Angel Di Maria has eaten a piece of food.
  eat() {
    if (Math.abs(this.x - food.x) < tileSize && Math.abs(this.y - food.y) < tileSize) {
      // Add it to the tail
      this.tail.push({});
      return true;
    }

    return false;
  }

  // Checking if Angel Di Maria should be transferred to PSG.
  die() {
    for (let i = 0; i < this.tail.length; i++) {
      if (Math.abs(this.x - this.tail[i].x) < tileSize && Math.abs(this.y - this.tail[i].y) < tileSize) {
        return true;
      }
    }

    return false;
  }

  border() {
    if (this.x + tileSize > width && this.velX != -1 || this.x < 0 && this.velX != 1) {
      this.x = width - this.x;
    } else if (this.y + tileSize > height && this.velY != -1 || this.velY != 1 && this.y < 0) {
      this.y = height - this.y;
    }
  }
}



// Adding an event listener for key presses.
window.addEventListener("keydown", function (e) {
  if (e.key === " ") {
    if (!gameOver) {
      e.preventDefault();
      isPaused = !isPaused;
      showPaused();

      if (!isPaused) {
        update();
      }
    }
  } else if (e.key === "ArrowUp" || e.key === "w" || e.key === "W") {
    if (!inputPending) {
      e.preventDefault();
      if (snake.velY != 1 && snake.x >= 0 && snake.x <= width && snake.y >= 0 && snake.y <= height) {
        snake.dir(0, -1);
        inputPending = true;
      }
    }
  } else if (e.key === "ArrowDown" || e.key === "s" || e.key === "S") {
    if (!inputPending) {
      e.preventDefault();
      if (snake.velY != -1 && snake.x >= 0 && snake.x <= width && snake.y >= 0 && snake.y <= height) {
        snake.dir(0, 1);
        inputPending = true;
      }
    }
  } else if (e.key === "ArrowLeft" || e.key === "a" || e.key === "A") {
    if (!inputPending) {
      e.preventDefault();
      if (snake.velX != 1 && snake.x >= 0 && snake.x <= width && snake.y >= 0 && snake.y <= height) {
        snake.dir(-1, 0);
        inputPending = true;
      }
    }
  } else if (e.key === "ArrowRight" || e.key === "d" || e.key === "D") {
    if (!inputPending) {
      e.preventDefault();
      if (snake.velX != -1 && snake.x >= 0 && snake.x <= width && snake.y >= 0 && snake.y <= height) {
        snake.dir(1, 0);
        inputPending = true;
      }
    }
  }
});

// Loading the browser window
window.addEventListener("load", function() {
  game();
});

// When the game is over, the user may reset the game by clickin on the snakeCanvas.
snakeCanvas.addEventListener("click", function() {
  if (gameOver) {
    game();
  }
})
