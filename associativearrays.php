<?php
$words = array ("red" => "красный", "blue" => "синий", "green" => "зелёный");

$words = ["red" => "красный", "blue" => "синий", "green" => "зелёный"];

$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
echo $countries["Spain"]; // Madrid
echo '<br />';

$countries["Spain"] = "Barcelona";
echo $countries["Spain"]; // Barcelona

$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$countries["Italy"] = "Rome"; // определяем новый элемент с ключом Italy
echo $countries["Italy"]; // Rome

$countries["Germany"] = "Berlin";
$countries["France"] = "Paris";
$countries["Spain"] = "Madrid";
$countries["Italy"] = "Rome";
echo $countries["Italy"]; // Rome

$words = ['red' => 'красный', 'blue' => 'синий', 'grenn' => 'зеленый'];

foreach ($words as $eng => $rus) {
    echo "{$eng} : {$rus}";
}