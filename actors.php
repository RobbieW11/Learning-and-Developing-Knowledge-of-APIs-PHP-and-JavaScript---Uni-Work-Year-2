<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
 
// import the execute_SQL function
require_once 'database/execute_SQL.php';
 
// define an SQL query 
$sql = "SELECT * FROM actor";
 
// execute the SQL query and store the results in a variable
$data = execute_SQL($sql, []);
 
// output the results as JSON
echo json_encode($data);
?>

