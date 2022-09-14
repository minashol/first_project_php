<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php

      include "header.html";

      ?>



      <form action="bmi.php" method="post">

        First Name: <input type="text" name="first_name"> <br>
        Height (in meters): <input type="number" step=0.01 name="height"> <br>
        Weight (in kilograms): <input type="number" step=0.1 name="kilos"> <br>

        <input type="submit">


      </form>







      <?php

      $name = $_POST["first_name"];
      $height = $_POST["height"];
      $weight = $_POST["kilos"];

      $bmi = $weight / ($height * $height);

      echo $bmi;


       ?>


      <?php
      include "footer.html";
      ?>






  </body>
</html>
