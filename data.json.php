<?php
// data strored in array 
$array = Array (
    "0" => Array(
        "id"=> "01",
        "nombre" => "Imanol",
        "apellido" => "Arredondo",
        "edad" => "21",
        "grado" => "7",
    ),
    "1" => Array(
        "id"=> "02",
        "nombre" => "Javier",
        "apellido" => "Luevano",
        "edad" => "32",
        "grado" => "4",
    ),
    "2" => Array(
        "id"=> "03",
        "nombre" => "Fernando",
        "apellido" => "Gómez",
        "edad" => "45",
        "grado" => "8",
    ),
);
$json = json_encode($array);
$bytes = file_put_contents("data.json", $json);
?>