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
    "Naam"=> "Ilias Mahraoui",
    "Leefdtijd"=> 17,
    "muzieksmaak"=> "HipHop/Rap",
    "woonplaats"=>"Amsterdam",
    "sport"=> "Voetbal");
    foreach($mijngegevens as $mijngegeves1 => $value){
        maakRij($mijngegeves1,$value);
    }

 ?>
</table>

</center>
</body>
</html>
