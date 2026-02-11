<?php
    include "includes/head_fragment.php";
    include "includes/header_fragment.php"; 
    include "includes/nav_fragment.php"; 
    include "includes/footer_fragment.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "About";
    echo head_fragment($title);
?>
<body>
    <?php
        echo header_fragment(); 
        echo nav_fragment(); 
    ?>
    <main>
        <h2>About</h2>
        <p>This is the about page</p>
    </main>
    <?php
        echo footer_fragment(); 
        ?>
</body>
</html>