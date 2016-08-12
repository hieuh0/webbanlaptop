<?php
ob_start();
session_start();
require "../lib/config.php";
require "../lib/quantri.php";
if(!isset($_SESSION["id"])){
header("location:index.php");
}
?>
<?php
if(isset($_POST["btnthoat"])){
        unset($_SESSION["id"]);
        unset($_SESSION["hoten"]);
        unset($_SESSION["email"]);
        unset($_SESSION["matkhau"]);
        unset($_SESSION["quyen"]);
        header("location:index.php");
}
?>
<?php
$id = $_GET["id"];
settype($id, "int");
$qr = "DELETE FROM dathang WHERE id='$id'";
mysql_query($qr);
header("location:quanlihd.php");
?>

