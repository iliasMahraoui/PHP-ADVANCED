<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<body>
<center>
<h3 style=text-align:center>Ilias mahraoui</h3>


<form name="invoer" action="advanced-2.php" method="post">



<p>Text kleur: </p>
<select name="color">



<?php

echo "<ul>";
$kleuren = array(
    "red",
    "blue",
    "green",
    "black",
    "Aqua");


    foreach ($kleuren as $keuze) {
        echo "<option><li>" . $keuze . "</li></option>";
      }
  
     echo "</ul>";
    
    ?>
     </select>


<p>Background color:</p>
<select name="color2">
 <?php
 echo "<ul>";
 
 $kleuren2 = array(
    "red",
    "blue",
    "green",
    "black",
    "Aqua");

    foreach ($kleuren2 as $kleurenlijst2) {
        echo "<option><li>" . $kleurenlijst2 . "</li></option>";
     }
     
     ?>
</select>
<div>
   <option>Tabelrandikkte (px)</option>
  <input type="text" name="border">
   </div>
    <div>
    <option>Cel-padding (px)</option>
  <input type="text" name="padding">
    </div>
   </div>
    <div> <input type="submit" name="submit" value="verstuur">
         </div>
<form>

</body>
</html>