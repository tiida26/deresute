<?php

$nowstamina = $_POST["nowstamina"];
$maxstamina = $_POST["maxstamina"];
$sabunminutes = ($maxstamina - $nowstamina) * 5;
$fullstaminatime = date("d.H:i", strtotime("+$sabunminutes minutes"));
$result = explode('.', $fullstaminatime);

if($result[0] == date("d")){
    $fullstaminaday = "今日";
} else {
    $fullstaminaday = "明日";
}

$fullstaminajikan = $result[1];

echo "スタミナが満タンになるのは" . " $fullstaminaday " . "の" . " $fullstaminajikan " . "くらいにゃ！" . PHP_EOL;

include("./deresute.html");

?>
