<?php

$tasks = [
    ['taskText' => "compra il pane"],
    ['taskText' => "pulisci la grondaia"],
    ['taskText' => "aggiusta le scale"]
];
header('Content-Type: application/json');
echo json_encode($tasks);
?>