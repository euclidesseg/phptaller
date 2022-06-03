<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto 2</title>
</head>
<body>
<h1>Punto 2</h1>
    <form method ="get" >
        <label for="">daos del triangulo</label><br>
        <input type="number" name = "base" placeholder ="ingrese la base"><br>
        <input type="number" name = "altura" placeholder ="ingrese la altura"><br>
        <button type = "submit">mostrar el area</button>
    </form>
    <?php
    if(isset( $_GET["base"]) && isset ($_GET["altura"])){
        $base = $_GET["base"];
        $altura = $_GET["altura"];

        $area = $base * $altura /2;
        echo "<p> el area del triangulo es : " .$area ."</p>";
    }
    ?><br>
    <li>
        <a href="index.php">inicio</a>
    </li>
</body>
</html>