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
        <label for="">INGRESE EL NUMERO QUE CORRESPONDA AL DIA</label><br>
        <input type="number" name = "numero" placeholder =""><br>
        <button type = "submit">mostrar</button>
    </form>

    <?php
    if(!empty( $_GET["numero"])){
      $numero  = $_GET["numero"];

      switch($numero){
          case 1:  echo "<p> es lunes :</p>";
          break;
          case 2:  echo "<p> es martes :</p>";
          break;
          case 3:  echo "<p> es miercoles :</p>";
          break;
          case 4:  echo "<p> es jueves :</p>";
          break;
          case 5:  echo "<p> es viernes :</p>";
          break;
          case 6:  echo "<p> es sabado :</p>";
          break;
          case 7:  echo "<p> es domingo :</p>";
          break;
          default: echo "<p> este dia pertence a otro planeta :</p>";
         
      }
    }
     
    ?><br>
    <li>
        <a href="index.php">INICIO</a>
    </li>
</body>
</html>