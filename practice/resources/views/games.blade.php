<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Typo Invaders</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
   
  
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
      background: #000;
      color: #000;
      font-family: monospace;
    }
    canvas {
      display: block;
      background: #111;
    }
    #input-box {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      width: 300px;
      padding: 10px;
      font-size: 20px;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
      @include('partials.header')
  <canvas id="gameCanvas"></canvas>
  <input type="text" id="input-box" placeholder="Type word here..." autofocus />

  <script>
    const canvas = document.getElementById("gameCanvas");
    const ctx = canvas.getContext("2d");
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const words = ["arrayko", "nako po", "arraymo", "burger ka sakin", "kaya pa", "undang eskwela uy", "game", "debug", "array", "function"];
    const enemies = [];
    let score = 0;
    let speed = 1;

    class Enemy {
      constructor(word, x, y) {
        this.word = word;
        this.x = x;
        this.y = y;
      }
      draw() {
        ctx.fillStyle = "white";
        ctx.font = "24px monospace";
        ctx.fillText(this.word, this.x, this.y);
      }
      update() {
        this.y += speed;
        this.draw();
      }
    }

    function spawnEnemy() {
      const word = words[Math.floor(Math.random() * words.length)];
      const x = Math.random() * (canvas.width - 100);
      enemies.push(new Enemy(word, x, 0));
    }

    function gameLoop() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      enemies.forEach((enemy, index) => {
        enemy.update();

        // Remove if hits bottom
        if (enemy.y > canvas.height) {
          enemies.splice(index, 1);
          score = Math.max(0, score - 5); // penalty
        }
      });

      ctx.fillStyle = "lime";
      ctx.font = "20px monospace";
      ctx.fillText("Score: " + score, 10, 30);

      requestAnimationFrame(gameLoop);
    }

    // Input Handling
    const inputBox = document.getElementById("input-box");
    inputBox.addEventListener("keydown", function (e) {
      if (e.key === "Enter") {
        const input = inputBox.value.trim().toLowerCase();
        const index = enemies.findIndex((enemy) => enemy.word === input);
        if (index !== -1) {
          enemies.splice(index, 1);
          score += 10;
          speed += 0.1;
        }
        inputBox.value = "";
      }
    });

    // Game Start
    setInterval(spawnEnemy, 1500);
    gameLoop();
  </script>
</body>
</html>
