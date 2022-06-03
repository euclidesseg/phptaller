<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER</title>
</head>
<body>
    <h1>Punto 1</h1>
    <form method ="get" >
        <label for="">digite su salario</label><br>
        <input type="number" name = "salario" placeholder ="no ponga puntos"><br>
        <button type = "submit">enviar salario</button>
    </form>

    <?php
    if(isset( $_GET["salario"])){
        $salario = $_GET["salario"];
        $salud  = $salario * 0.08;
        $pension = $salario * 0.08;
        $neto = $salario -($salud + $pension);
        echo "<p> Descuneto de salud es: " .$salud ."</p>";
        echo "<p> Descuneto de pension es: " .$pension ."</p>";
        echo "<p> su salario es: " .$salario ."</p>";
        echo "<p> su salario menos descuento es : " .$neto ."</p>";
        
    }
     
    ?><br>
    <li>
        <a href="index.php">INICIO</a>
    </li>
</body>
</html>