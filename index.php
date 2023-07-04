
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500;800&display=swap"
    />
  </head>
  <body>
    <header class="rectangle-top">
      <div class="frame-child8"></div>
      <div class="frame-child9"></div>
      <div class="frame-child10"></div>
      <h1 class="my-first-figma">My First Figma</h1>
      <label class="class">CLASS</label>
      <label class="collage">Collage</label>
      <div class="frame-child11"></div>
      <div class="frame-child12"></div>
      <div class="frame-child13"></div>
      
      <form method = "get" action="frame-2.php">
      <input
        class="enter-your-name"
        type="text"
        name = "name"
        placeholder="Enter your Name"
        maxlength
        minlength="{2}"
        required
      />

      <input
        class="enter-your-branch"
        type="text"
        placeholder="Enter your branch"
        name = "branch"
        maxlength
        minlength
      />

      <input
        class="enter-your-collage"
        type="text"
        name = "clgname"
        placeholder="Enter your collage"
        maxlength
        minlength
        required
      />
      <button type = "submit"class="frame-child14" autofocus id="rectangleButton" onclick="fun()"></button>
    </form>
    
      <a class="rectangle-a" id="rectangleLink"> </a>
      <div class="submit1">SUBMIT</div>
      <div class="frame-child15"></div>
      <label class="hp2">HP</label>
      <div class="snist">SNIST</div>
      <div class="name">NAME</div>
    </header>

   

    <script>
      function fun()
      {
        location.assign('./frame-2.php');
      }
      var rectangleButton = document.getElementById("rectangleButton");
      if (rectangleButton) {
        rectangleButton.addEventListener("click", function (e) {
          window.location.href = "./frame-2.php";
        });
      }
      
      var rectangleLink = document.getElementById("rectangleLink");
      if (rectangleLink) {
        rectangleLink.addEventListener("click", function () {
          window.open("https://sreenidhi.edu.in/");
        });
      }
      </script>
  </body>
</html>
