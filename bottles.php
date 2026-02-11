<?php
 
function verse($number) {
    $bottles = ($number == 1) ? "bottle" : "bottles";
    $one_fewer = $number-1;
    $one_fewer_bottles = ($one_fewer == 1) ? "bottle" : "bottles";
  
    return <<<EOT
        <p>$number green $bottles, standing on the wall,
        <br>$number green $bottles, standing on the wall,
        <br>and if 1 green bottle should accidently fall,
        <br>there'll be $one_fewer green $one_fewer_bottles standing on the wall.</p>
    EOT;
}
 
echo "<h1>Ten Green Bottles</h1>";
 
for ($number = 10; $number >= 1; $number--) {
  echo "<section>". verse($number) . "</section>";
}
 
?>