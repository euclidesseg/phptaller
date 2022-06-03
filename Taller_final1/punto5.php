<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Punto 5</h1>
    <form method ="get" >
        <label for="">INGRESE DOS NUMEOS ENTEROS POSITIVOS</label><br>
        <input type="number" name = "numero1" placeholder ="ingrese positivo"><br>
        <input type="number" name = "numero2" placeholder ="ingreseno positivo"><br>
        <button type = "submit">mostrar</button>
    </form>

    <?php
    if(!empty( $_GET["numero1"]) && !empty( $_GET["numero2"])){
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        if($numero1 < $numero2){
            echo "<p> el numero 1 es menos que el numero 2 : " .$numero1 .", " .$numero2."</p>";
        }else if($numero1 > $numero2){
            echo "<p> el numero 1 es mayor que el numero 2 : " .$numero1 .", " .$numero2."</p>";
        }else{
            echo "<p> los numeros son iguales : " .$numero1 .", " .$numero2."</p>";
        }
       
       
        
    }
     
    ?><br>
    <li>
        <a href="index.php">INICIO</a>
    </li>
</body>
</html>