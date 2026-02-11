<?php

// Add JSON Headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once 'climate_data.php';

$output = climate_data();

echo json_encode($output);
?>