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
$row_hd = chitiethd($id);

?>

<?php
if(isset($_POST["btnhd"])){
    $t = $_POST["txtname"];
    $dt = $_POST["dienthoai"];
    $dc = $_POST["diachi"];
    $sp = $_POST["tensp"];
    $n = $_POST["ngay"];
    $tr = $_POST["tinhtrang"];
     $qr = " UPDATE dathang SET tinhtrang='$tr' WHERE id = '$id' ";
        mysql_query($qr);
        header("location:quanlihd.php");
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
                        <h1 class="page-header">Hóa Đơn
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên Người Mua</label>
                                <input id="txtname" value="<?php echo $row_hd["tennguoi"]?>" class="form-control" name="txtname" disabled />
                            </div>
                      
                            	<div class="form-group">
                                <label>Điện Thọai</label>
                                <input id="dienthoai" value="<?php echo $row_hd["dienthoai"]?>" class="form-control" name="dienthoai" disabled />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input id="diachi" value="<?php echo $row_hd["diachi"]?>" class="form-control" name="diachi" disabled />
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input id="tensp" value="<?php echo $row_hd["idsp"]?>" class="form-control" name="tensp" disabled />
                            </div>
                            <div class="form-group">
                                <label>Ngày</label>
                                <input id="ngay" value="<?php echo $row_hd["ngay"]?>" class="form-control" name="ngay"  disabled/>
                            </div>
                             <div class="form-group">
                                <label>Tình Trạng</label>
                                <select id="tinhtrang" name="tinhtrang">
                                    <option <?php if($row_hd["tinhtrang"] ==0) echo "selected='selected'";?> value="0"> Chưa Thanh Toán </option>
                                   <option <?php if($row_hd["tinhtrang"] ==1) echo "selected='selected'";?> value="1"> Đã Thanh Toán </option>
                                </select>
                            </div>
                            <button type="submit" name="btnhd" id="btnhd" class="btn btn-default">Sữa</button>
                            <button type="reset" class="btn btn-default">Hủy</button>
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
