<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto 7</title>
</head>
<body>
    <h1>punto 7</h1>
<form method ="get" >
        <label for="">INGRESE LA EDAD</label><br>
        <input type="number" name = "edad" placeholder ="ingrese la edad"><br>
        <button type = "submit">mostrar</button>
    </form>
    <?php
    if(!empty( $_GET["edad"])){
      $edad  = $_GET["edad"];

      if($edad < 18){
        echo "<p> es adolescente edad: " .$edad. "</p>";
      }else if($edad >= 18 && $edad <= 28 ){
        echo "<p> es es adulto adolecente edad: " .$edad. "</p>";
      }else if($edad >= 29 && $edad <= 49 ){
        echo "<p> es es adulto edad: " .$edad. "</p>";
      }else{
        echo "<p> es es adulto mayor edad: " .$edad. "</p>";
      }
    }
     
    ?><br>
    <li>
        <a href="index.php">INICIO</a>
    </li>
</body>
</html>