<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./frame-2.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500;800&display=swap"
    />
  </head>
  <body>
    <div class="rectangle-root">
      <div class="frame-child1"></div>
      <div class="frame-child2"></div>
      <label class="semester-sgpa">SEMESTER SGPA</label>
      <label class="first-semester">First Semester</label>
      <label class="second-semester">Second Semester</label>
      <label class="third-semester">Third Semester</label>
      <div class="frame-child3"></div>
      <div class="frame-child4"></div>
      <div class="frame-child5"></div>
      <form action = "frame-3.php" method = "get">
      <input
        class="input"
        type="text"
        name = "sem1"
        placeholder="Enter your SGPA"
        maxlength
        minlength
      />

      <input
        class="input1"
        type="text"
        name = "sem2"
        placeholder="Enter your SGPA"
        maxlength
        minlength
      />

      <input
        class="input2"
        type="text"
        name = "sem3"
        placeholder="Enter your SGPA"
        maxlength
        minlength
      />
      <button type="submit" class="frame-child6" autofocus id="rectangleButton1"></button>
    </form>
    <button class="rectangle-button" autofocus id="rectangleButton"></button>
      <div class="go-back1">GO BACK</div>
      <div class="submit">SUBMIT</div>
      <div class="frame-child7"></div>
      <label class="hp1">HP</label>
    </div>

    <?php
     $_SESSION['name']=$_GET['name']; 
     $_SESSION['branch']=$_GET['branch'];
     $_SESSION['clgname']=$_GET['clgname'];
    ?>

    <script>
      var rectangleButton = document.getElementById("rectangleButton");
      if (rectangleButton) {
        rectangleButton.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }
      
      var rectangleButton1 = document.getElementById("rectangleButton1");
      if (rectangleButton1) {
        rectangleButton1.addEventListener("click", function (e) {
          window.location.href = "./frame-3.php";
        });
      }
      </script>
  </body>
</html>
