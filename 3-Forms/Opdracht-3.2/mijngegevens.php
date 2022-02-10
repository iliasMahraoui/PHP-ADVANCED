<!DOCTYPE html>
<html lang="en">

<?php 
echo "<body style= \"background-color:".$_POST['color'].";\" >";
?>
Voornaam is: <?php  echo $_POST["Voornaam"]; ?> <br>
Achternaam :<?php echo $_POST["achternaam"];?><br>
Klas: <?php echo $_POST["klas"];?> <br>
leeftijd: <?php echo $_POST["leeftijd"];?> <br>
adres: <?php echo$_POST["adres"];  ?> <br>
plaatsnaam :<?php echo $_POST["plaatsnaam"];?> <br>
<?php echo$_POST["geslacht"];?> <br>
<?php echo $_POST["color"];?>

</body>
</html> 
