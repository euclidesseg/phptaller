<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto 3</title>
</head>
<body>
<form method ="get" >
        <label for="">INGRESE LOS NUMEROS</label><br>
        <input type="number" name = "numero1" placeholder ="ingresa el primer numero"><br>
        <input type="number" name = "numero2" placeholder ="ingresa un numero"><br>
        <button type = "submit">MOSTRAR</button>
    </form>
    <?php
    if(isset(  $_GET["numero1"],$_GET["numero2"])){
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multipicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        $modulo = $numero1 % $numero2;
        echo "<p> el area de los numeros es  : " .$suma ."</p>";
        echo "<p> la resta a de los numeros es  : " .$resta ."</p>";
        echo "<p> la multiplicacin de los numeros es  : " .$multipicacion ."</p>";
        echo "<p> la division de los numeros es  : " .$division ."</p>";
        echo "<p> el modulo de los numeros es  : " .$modulo ."</p>";
    }
    ?><br>
    <li>
        <a href="index.php">icicio</a>
    </li>
</body>
</html>