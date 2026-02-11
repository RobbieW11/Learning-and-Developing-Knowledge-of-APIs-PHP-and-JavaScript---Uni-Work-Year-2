<?php
    include "includes/head_fragment.php";
    include "includes/header_fragment.php"; 
    include "includes/nav_fragment.php"; 
    include "includes/footer_fragment.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Contact";
    echo head_fragment($title);
?>
<body>
    <?php
        echo header_fragment();
        echo nav_fragment();
    ?>
    <main>
        <h2>Contact</h2>
        <p>Contact me at contact@example.com</p>
    </main>
    <?php 
        echo footer_fragment();
    ?>
</body>
</html>