<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
 
require_once 'database/execute_SQL.php';
 
// Add a where clause to the SQL query 
$sql = "SELECT film_id AS id, title, description, release_year, language.name AS language, category.name AS category, rating, length
        FROM film 
        JOIN language ON film.language_id = language.language_id
        JOIN category ON film.category_id = category.category_id
        WHERE title LIKE :search OR description LIKE :search";
 
// Access the search parameter in the URL
$search = $_GET['search'] ?? '';
 
// Link the SQL param to the URL parameter
$param = [
    ':search' => '%' . $search . '%'
];
 
// Make sure to pass $param to this function 
$data = execute_SQL($sql, $param);
 
echo json_encode($data);
?>
