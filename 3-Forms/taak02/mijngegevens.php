<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "Dit heb je zojuist getypt:". $_POST["first-name"];
foreach($_POST as $key => $value){
    echo " De value is: " . $value . "<br>"; 
}

echo "<body style='background-color:".$_POST ["kleur"]."'>";
?>  
 
</body>
</html>


