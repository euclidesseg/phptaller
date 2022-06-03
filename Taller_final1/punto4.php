<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto 4</title>
</head>
<body>
<form method ="get" >
        <label for="">INGRESE EL NUMERO ENTERO</label><br>
        <input type="number" name = "numero" placeholder ="ingresa el numero"><br>
        <button type = "submit">MOSTRAR</button>
    </form>
    <?php
    if(isset(  $_GET["numero"])){
        $numero = $_GET["numero"];
        $modulo = $numero % 2;
        if($modulo == 0){
            echo "<p> el numero es par : " .$numero ."</p>";
        }else{
            echo "<p> el numero es impar : " .$numero ."</p>";
        }
        if($numero < 0){
            echo "<p> el numero es negativo : " .$numero ."</p>";
        }else{
            echo "<p> el numero es positivo : " .$numero ."</p>";
        }

    }
    ?><br>
    <li>
        <a href="index.php">inicio</a>
    </li>
</body>
</html>