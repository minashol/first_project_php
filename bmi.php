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
      $bmi=round($bmi, 2);
      if ($bmi <=18.5){
        echo "$name, you are underweight! You should gain some weight! Your BMI is $bmi";

      }elseif ($bmi<=24.9){
        echo "$name, you are in the healthy weight range. Your BMI is $bmi";
      }elseif($bmi<=29.9){
        echo "$name, you are in the overweight range. Do some diet. Your BMI is $bmi";
      }else{
        echo "$name, you are in the obese range! You should watch out your diet! Your BMI is $bmi";
      }


       ?>
       <br>
       <a href="https://www.cdc.gov/healthyweight/assessing/bmi/index.html" target="_blank">Click here</a> for more information about BMI.<br>
       <br>
       Last entries: <br>

       <table>
         <tr>
           <th> Name </th>
           <th> Height </th>
           <th> Weight </th>
           <th> BMI </th>
         </tr>
         <tr>
           <td> <?php echo $name; ?> </td>
           <td> <?php echo $height; ?> </td>
           <td> <?php echo $weight; ?> </td>
           <td> <?php echo $bmi; ?> </td>
         </tr>
       </table>





      <?php
      include "footer.html";
      ?>






  </body>
</html>
