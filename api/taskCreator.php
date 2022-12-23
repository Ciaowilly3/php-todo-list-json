<?php
if (empty($_POST["task"])) {

    http_response_code(400);
  
    exit("Dati non validi");
  }
$tasks = file_get_contents("../database.json");
$tasks = json_decode($tasks, true);


$newTask = [
    'taskText' => $_POST["task"]
];

$tasks[] = $newTask;

$jsonString = json_encode($tasks, JSON_PRETTY_PRINT);

file_put_contents("../database.json", $jsonString);

header("Content-Type: application/json");

echo json_encode($newTask);
?>