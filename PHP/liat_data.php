<?php
$file = 'data.json';
$json_data = file_get_contents($file);
$data_array = json_decode($json_data, true);
echo json_encode($data_array, JSON_PRETTY_PRINT);
?>
