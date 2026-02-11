<?php

// Add JSON Headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Import Code Once from data.php
require_once 'data.php';

$message = data();

// Encode the Data in JSON Format
echo json_encode($message);

?>