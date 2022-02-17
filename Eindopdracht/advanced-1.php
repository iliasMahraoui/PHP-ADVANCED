<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form name="Forum" method="POST" action="advanced-2.php">

    <p>Tabelranddikte: <input name="border-dikte"></p>
<p>cel-padding: <input name="padding"></p>

<p>Tekstkleur: 
    <select id="kleur" name="tekst"></p>
        <?php 
        $kleuren = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }
        ?>
    </select></p>

<p>Achtergrondkleur:
    <select id="achtergrond kleur" name="achtergrond"></p>
    <?php 
        $kleuren2 = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($kleuren2 as $kleur2){
            echo "<option value='$kleur2' selected>$kleur2</option>";
        }
        ?>
    </select></p>



<button>Verstuur</button>
</form>

</body>
</html>