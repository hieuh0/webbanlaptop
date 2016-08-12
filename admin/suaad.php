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
    $row_ad = chitietad($id);
?>

<?php
if(isset($_POST["btnsua"])){
    $ten = $_POST["newhoten"];
    $ns = $_POST["newnamsinh"];
    $dc = $_POST["newdiachi"];
    $em = $_POST["newemail"];
    $mk = md5($_POST["newmatkhau"]);
    $qr = "UPDATE nguoidung set hoten='$ten',namsinh='$ns',diachi='$dc',email='$em',matkhau='$mk',1 WHERE id='$id'";
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
                            <small>Sữa</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">  
                            <div class="form-group">
                                <label>Ho Ten</label>
                                <input id="newhoten" value="<?php echo $row_ad["hoten"] ?>" class="form-control" name="newhoten" />
                            </div>
                            <div class="form-group">
                                <label>namsinh</label>
                                <input id="newnamsinh" value="<?php echo $row_ad["namsinh"] ?>" class="form-control" name="newnamsinh" />
                            </div>
                            <div class="form-group">
                                  <label>Dia Chi</label>
                                <input class="form-control" value="<?php echo $row_ad["diachi"] ?>" id="newdiachi" name="newdiachi"/>
                                                            </div>

                        <div class="form-group">
                                  <label>Email</label>
                                <input class="form-control" value="<?php echo $row_ad["email"] ?>" name="newemail" id="newemail"  />
                                                            </div>
                        <div class="form-group">
                                  <label>mat khau</label>
                                <input type="password" class="form-control" id="newmatkhau" name="newmatkhau" />
                        </div>
                            <button type="submit" name="btnsua" id="btnsua" class="btn btn-default">Sữa</button>
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