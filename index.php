<?php
// Task 1

$integer = 12345;
$rem = 0;

while ($integer > 0) {
    $temp = (int) $integer % 10;
    $integer = (int) $integer / 10;
    $rem = $rem + $temp;
}
echo $rem;


// Task 2
function ending($number)
{
    $word = "";
    $rem = $number % 10;

    if ($rem == 1) {
        $word  = "$number Урок";
    } elseif ($rem == 5 || $rem == 6 || $rem == 7 || $rem == 8 || $rem == 9 || $rem == 0) {
        $word  = "$number Уроков";
    }
    else
        $word  = "$number Урока";

    return  $word;
}

echo ending(21);


// // Task 3
function traffic_light()
{
    date_default_timezone_set('Asia/Baku');
    $date = date('i', time());
    $rem = $date % 10;
    $color = "";

    if ($rem <= 2 && $rem != 0) {
        $color = "Красный";
    } elseif ($rem <= 3) {
        $color = "Желтый";
    } else {
        $color = "Зеленый";
    }

    return $color;
}
echo traffic_light();
