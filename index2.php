<?php
 
include 'template.php';
 
$title = "Home";
$content = <<<EOT
  <h2>Home</h2>
  <p>Welcome to my website</p>
EOT;
 
echo template($title, $content); 