<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function rekenUit($a, $b, $c) {
    $berekening = $a + $b + $c;
    return $berekening;

}

 echo "Als ik 10, 20 en 30 bij elkaar optel, is de uitkomst: " . rekenUit(10, 20, 30);
 echo "<br>Als ik 11, 27 en 38 bij elkaar optel, is de uitkomst: " . rekenUit(11, 27, 38);
 echo "<br>Als ik 4, 12 en 62 bij elkaar optel, is de uitkomst: " . rekenUit(4, 12, 62);


?>
    
</body>
</html>