<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Punto 8</h1>
    <form method ="get" >
        <label for="">INGRESE EL NUMERO DE LA TABLA</label><br>
        <input type="number" name = "numero" placeholder ="ingrese numero"><br>
        <button type = "submit">mostrar</button>
    </form>

    <?php
    if(!empty( $_GET["numero"])){
        $numero = $_GET["numero"];
      
        for($i = 0; $i >= 12; $i++){
            $resultado = $numero * $i;
            echo "<p>" .$numero." x " .$i." = " ."$resultado </p>";
        }
        

    }
     
    ?><br>
    <li>
        <a href="index.php">INICIO</a>
    </li>
</body>
</html>