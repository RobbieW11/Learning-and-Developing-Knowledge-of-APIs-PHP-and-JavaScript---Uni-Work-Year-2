<?php
  $name = "PHP";
  $date = date("l j F Y");
  function say_hello($name) {
    return "Hello " .$name ."!";
  }

    include "includes/head_fragment.php";
    include "includes/header_fragment.php"; 
    include "includes/nav_fragment.php"; 
    include "includes/footer_fragment.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Home";
    echo head_fragment($title); 
?>
<body>
  <?php 
      echo header_fragment(); 
      echo nav_fragment(); 
    ?>
    <main>
      <?php
      //A Comment in PHP
      /* 
        This is a Comment Block! */
      $text = <<<EOT
       <h1>Heredoc</h1>
       <p>This is a useful way of outputting a block of HTML in $name</p>
      EOT;
      echo $text;
      ?>
    </main>
    <?php
      echo footer_fragment(); 
      ?>
</body>
</html>
