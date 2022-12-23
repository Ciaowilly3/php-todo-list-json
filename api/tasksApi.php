<?php
$data = file_get_contents("../database.json");

header("Content-Type: application/json");
echo $data;


?>
