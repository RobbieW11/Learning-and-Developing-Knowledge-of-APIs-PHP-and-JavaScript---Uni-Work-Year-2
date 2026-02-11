<?php
// import the database connection function
require_once 'database_connection.php';
 
function execute_SQL($sql = "", $param = []) {
    try {
        // connect to the database
        $conn = database_connection();
        // prepare and execute the SQL statement, passing in the parameters
        $result = $conn->prepare($sql);
        $result->execute($param); 
        // fetch the results as an associative array and return it
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
 
    } catch( PDOException $e ) {
        // If there is an exception, output the error message
        $error = "SQL Error: " . $e->getMessage();
        echo json_encode($error);
        exit();
    }
}
?>