<?php 
if(!isset($_SESSION["id"])) {
header("location:../index.php");
}
?>
xin chao <?php echo $_SESSION["hoten"] ?> <a href="quantri1.php"> click vao day truy cap quan tri</a>