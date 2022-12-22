<?php

$tasks = [
    ['taskText' => "compra il pane"],
    ['tasktext' => "pulisci la grondaia"],
    ['tasktext' => "aggiusta le scale"]
];
header('Content-Type: application/json');
echo json_encode($tasks);
?>