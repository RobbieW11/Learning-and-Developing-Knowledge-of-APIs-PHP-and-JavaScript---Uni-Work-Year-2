<?php
$amount = 10;

if ($amount == 10) {
   echo "<em>This is 10!</em>";
} else {
   echo "<em>Not 10!</em>";
}

// If statement to find out the day of the week.
$day_of_week = date("l");
 
if ($day_of_week == "Monday") {
   echo "<strong>Special offer: 10% off</strong>";
} else {
    echo"<em> Unlucky, No Special Offer Today!</em>";
}

// Ternany Version (Short hand)
$day_of_week = date("l");
// Code after question mark will execute if expression is true.
// Code after colon will execute if false.
$html = ($day_of_week === "Monday") ? "<em>Special Offer!</em>" : "";
?>