<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopracht2</title>
</head>
<body>
  <?php
  echo "<body style='background-color:".$_POST['backgroundcolor']."'>";

  ?> 

  <?php
  function maakRij($kaas, $ham){
      echo "<tr>";
      echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$kaas</td>";
      echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$ham</td>";
      echo "<tr>";
  }

  $infoadam = [
    'naam'     => $_POST['name'],
    'leeftijd' => $_POST['age'],
    'lengte'   => $_POST['height'],
    'sport'    => $_POST['sport'],
    'hobbies'  => $_POST['hobbies'],
    ]; 

    echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";

    foreach($infoadam as $key =>$me){
        maakRij($key, $me);
    }
    echo "</table>"
  ?>
</body>
</html>