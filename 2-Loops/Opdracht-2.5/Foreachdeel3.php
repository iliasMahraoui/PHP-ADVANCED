<!DOCTYPE html>
<html>

<?php 
$student = array("voornaam" =>"jan", "achternaam"=> "janssen", "klas"=> "9A", "Leeftijd"=> 17, "Woonplaats"=> "Amstelveen");
foreach ($student as $key => $value) {
    echo  $key. " : " .$value ;
    echo "<br>";
}
?>

</body>
</html>