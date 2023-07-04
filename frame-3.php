<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./frame-3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500;800&display=swap"
    />
  </head>
  <body>
    <div class="rectangle-parent">
      <div class="frame-child"></div>
      <button class="frame-item" autofocus id="rectangleButton"></button>
      <div class="go-back">GO BACK</div>
      <div class="frame-inner"></div>
      <label class="hp">HP</label>
      <div class="rectangle-div">
      <div class = "himanshu-parida">
      <?php
      $name = $_SESSION['name'];
      $branch = $_SESSION['branch'];
      $clg = $_SESSION['clgname'];
      $sem1 = $_GET['sem1'];
      $sem2 = $_GET['sem2'];
      $sem3 = $_GET['sem3'];
      echo $name.'</br>';
      echo $branch.'</br>';
      echo $clg.'</br>';
      echo $sem1.'</br>';
      echo $sem2.'</br>';
      echo $sem3.'</br>';
      
      ?>
      </div>
      </div>

      
    </div>
  </body>
  
  <script>
      var rectangleButton = document.getElementById("rectangleButton");
      if (rectangleButton) {
        rectangleButton.addEventListener("click", function (e) {
          window.location.href = "./frame-2.php";
        });
      }
      </script>
</html>
