<?php

$leeftijd = 0;

while($leeftijd < 18){
    echo "Ik ben $leeftijd jaar, dus ik mag nog niet stemmen" . "<br>";
    $leeftijd++;
 
    if($leeftijd == 18){
      echo "Ik ben $leeftijd jaar oud, dus ik heb stemrecht!";
    }
  }