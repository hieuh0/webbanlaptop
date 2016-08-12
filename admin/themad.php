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
    if(isset($_POST["btnthemad"])){
        $ten = $_POST["hoten"];
        $ns = $_POST["namsinh"];
        $dc = $_POST["diachi"];
        $email = $_POST["email"];
        $mk = md5($_POST["matkhau"]);
        $qr = "INSERT INTO nguoidung VALUES(null,'$ten','$ns','$dc','$email','$mk',1)";
        mysql_query($qr);
        header("location:quanliad.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Dien Toan Dam May</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">San Pham
                            <small>Them</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">  
                            <div class="form-group">
                                <label>Ho Ten</label>
                                <input id="hoten" class="form-control" name="hoten" placeholder="nhap ho ten" />
                            </div>
                            <div class="form-group">
                                <label>namsinh</label>
                                <input id="namsinh" class="form-control" name="namsinh" placeholder="nhap email" />
                            </div>
                            <div class="form-group">
                                  <label>Dia Chi</label>
                                <input class="form-control" id="diachi" name="diachi" placeholder="nhap email" />
                                                            </div>

                        <div class="form-group">
                                  <label>Email</label>
                                <input class="form-control" name="email" id="email" placeholder="nhap email" />
                                                            </div>
                        <div class="form-group">
                                  <label>mat khau</label>
                                <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="nhap email" />
                                                            </div>
                            <button type="submit" name="btnthemad" id="btnthemad" class="btn btn-default">Them</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                </div>
        </div>
    </div>
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
</body>

</html>