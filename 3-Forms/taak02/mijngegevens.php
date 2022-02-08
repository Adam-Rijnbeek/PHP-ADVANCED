<?php
echo var_dump($_GET);
foreach($_GET as $key => $value){
    echo " De value is: " . $value . "<br>"; 
}

echo "<body style='background-color:".$_GET ["kleur"]."'>";
?>