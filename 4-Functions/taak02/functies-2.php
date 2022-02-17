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
    function rekenUit($num1, $num2, $num3){
        $antwoord = $num1 + $num2 + $num3;
        return $antwoord;
    }
    $answer1 = rekenUit(5, 10, 5);
$answer2 = rekenUit(433, 843, 96);
$answer3 = rekenUit(538564.22394, 1432728325.9, 9);

echo $answer1 . "<br>";
echo $answer2 . "<br>";
echo $answer3 . "<br>";
?>

</body>
</html>