<?php

$capitals = [
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Canada" => "Ottawa",
    "Australia" => "Canberra",
    "Brazil" => "Brasília"
];

ksort($capitals);


foreach ($capitals as $country => $capital) {
    echo "$country: $capital<br>";
}
?>