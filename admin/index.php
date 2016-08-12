<?php
ob_start();
session_start();
require "../lib/config.php";
?>
<?php
if(isset($_POST["btnlogin"])){
    $em  = $_POST["email"];
    $pa  = md5($_POST["matkhau"]);
    $qr = "SELECT * FROM nguoidung WHERE email='$em' AND matkhau='$pa' ";
    $user = mysql_query($qr);
    if(mysql_num_rows($user) == 1){
    $row = mysql_fetch_array($user);
    $_SESSION["id"] = $row['id'];
    $_SESSION["hoten"] = $row['hoten'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["matkhau"] = $row['matkhau'];
    $_SESSION["quyen"] = $row['quyen'];
    }
}
?>

<?php
if(isset($_POST["btnthoat"])){
        unset($_SESSION["id"]);
        unset($_SESSION["hoten"]);
        unset($_SESSION["email"]);
        unset($_SESSION["matkhau"]);
        unset($_SESSION["quyen"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Điện Toán Đám Mây</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <link href="../css/my.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
     <script src="dist/js/sb-admin-2.js"></script>
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
     <script src="dist/js/sb-admin-2.js"></script>
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>
    <div class="container">
    <?php
    if( !isset($_SESSION["id"])){
        require "fromlogin.php";
    }
    else{
        require "quantri.php";
    }

    ?>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/my.js"></script>

</body>

</html>
