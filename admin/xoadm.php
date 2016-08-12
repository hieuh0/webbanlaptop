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
$id = $_GET["id"];
settype($id, "int");
$qr = "DELETE FROM danhmuc WHERE id='$id'";

mysql_query($qr);
header("location:danhmuc.php");
?>