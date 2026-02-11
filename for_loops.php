<?php

/* Psuedocode for this:
    for (initialisation expression; test expression; modification expression) {
        action(s) if expression is true
    }
        */

$limit = 20;
 
for ($number = 1; $number <= $limit; $number++) {
   echo "The number is $number <br>";
}

/* Pseudocode for this:
    while (expression) {
    action(s) if expression is true
    }
    */

// While Loop
$number = 1;
$limit = 20;
 
while ($number <= $limit) {
 echo "The number is $number <br>\n";
 $number++;
}


/* Pseudocode for this:
    foreach (array_name as variable_name) {
    action to process element
    }
    */
    
// Foreach

// Define an Array
$sports = ['football', 'hockey', 'swimming'];
 
// Loop through each Array Item
foreach ($sports as $sport_name) {
   echo "<p>Sport: $sport_name</p>";
}

?>