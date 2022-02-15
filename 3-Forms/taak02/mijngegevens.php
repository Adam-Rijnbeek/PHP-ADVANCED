<?php
echo "Dit heb je zojuist getypt:". $_POST["first-name"];
foreach($_POST as $key => $value){
    echo " De value is: " . $value . "<br>"; 
}

echo "<body style='background-color:".$_POST ["kleur"]."'>";
?>