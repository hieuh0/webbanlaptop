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
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">LaptopNews</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">MyAdmin</a></li>
      <li><a href="quantri1.php">Sản Phẩm</a></li>
      <li><a href="danhmuc.php">Danh Mục</a></li>
      <li><a href="hangsx.php">Hãng Sản Xuất</a></li>
      <li><a href="quanliad.php">Quản Lí ADMIN</a></li>
      <li><a href="quanlihd.php">Quản Lí Hóa Đơn</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <form action="" method="POST">
<input type="submit" class="btn btn-info" name="btnthoat" id="btnthoat" value="Thoát"/> 
</form>
    </ul>
  </div>
</nav>
<div class="container">
 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hóa Đơn
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <p>Lưu ý: Tình Trạng</p>
                    <p>Số 0: Chưa Thanh Toán</p>
                    <p>Số 1: Đã Thanh Toán</p>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Người Mua</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Sản Phẩm</th>
                                <th>Ngày</th>
                                <th>Tình Trạng</th>
                                <th>Xóa</th>
                                <th>Sữa</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                        $ad = xemhoadon();
                        while($row_ad = mysql_fetch_array($ad)){
                            ob_start();
                        ?>
                       
                            <tr class="odd gradeX" align="center">
                                <td>{{id}}</td>
                                <td>{{tennguoi}}</td>
                                <td>{{dienthoai}}</td>
                                <td>{{diachi}}</td>
                                <td>{{tensp}}</td>
                                <td>{{ngay}}</td>
                                <td>{{tinhtrang}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoahd.php?id={{id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="suahd.php?id={{id}}">Edit</a></td>
                            </tr>
                           <?php
                            $s = ob_get_clean();
                            $s = str_replace("{{id}}",$row_ad["id"],$s);
                            $s = str_replace("{{tennguoi}}",$row_ad["tennguoi"],$s);
                            $s = str_replace("{{dienthoai}}",$row_ad["dienthoai"],$s);
                            $s = str_replace("{{diachi}}",$row_ad["diachi"],$s);
                            $s = str_replace("{{tensp}}",$row_ad["tensp"],$s);
                            $s = str_replace("{{ngay}}",$row_ad["ngay"],$s);
                            $s = str_replace("{{tinhtrang}}",$row_ad["tinhtrang"],$s);
                            echo $s;
                                }
                            ?> 
                        </tbody>
                    </table>
                </div>
    </div>
</div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/my.js"></script>

</body>

</html>
