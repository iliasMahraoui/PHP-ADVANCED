<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilias Mahraoui</title>
</head>
<body>
    
<center>

<?php
echo "<table style=border-spacing:" . $_POST['tabelrand'] . "px>";

$info = array(
    "Naam" => "Ilias Mahraoui<br>",
    "Leeftijd" => "17 jaar<br>",
    "Woonplaats" => "Amsterdam<br>",
    "Hobby" => "Voetballen<br>",
    "Eigenschap" => "LeerGierig<br>"
);

function maakRij($key, $value){
    echo "<body style=background-color:" . $_POST['color2'] . ">
    <tr>
    <th style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $key . "</p> </th>
    <th style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $value . "</p> </th>
    </tr>";

}
foreach ($info as $keys => $values) {
maakRij($keys, $values);
}

echo "</table>";

?>


</center>

</body>
</html>