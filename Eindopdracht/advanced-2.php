<!DOCTYPE html>
<html>

<style>
    
body {
  color: <?= $_POST["tekstkleur"] ?>;
  background-color: <?= $_POST["achtergrond-color"] ?>;
}

table,tr,td{
    border: <?= $_POST['border']?>px solid black;
    padding:<?= $_POST['padding']?>px;
}

</style>
<center>'
<table>
<tr>
<th>key</th>
<th>value</th>
</tr>

<?php function maakRij($mijngegeves1,$value){
     echo "<tr>
     <td>".$mijngegeves1."</td>
     <td>".$value."</td>
     </tr> ";
}
?>

<?php

$mijngegevens=array(
    "Naam"=> "ilias mahraoui",
    "Leefdtijd"=> 17,
    "Sport"=> "Voetbal",
    "Woonplaats"=>"Amsterdam",
    "Hobby's"=> "Voetbal/gamen");
   

    foreach ($mijngegevens as $keys => $value) {
    echo "<body style=background-color:" . $_POST['color2'] . ">
    <tr>
    <td style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $keys . "</p> </td>
    <td style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $value . "</p> </td>
    </tr>";
}

 ?>
</table>

</center>
</body>
</html>