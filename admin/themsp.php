
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
if(isset($_POST["btnthemsp"])){
    $target_dir = "../upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $name = $_FILES["fileToUpload"]["name"]; 
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $ten = $_POST["txtten"];
    $mota = $_POST["txtmota"];
    $hinh = $_POST["hinh"];
    $chitiet = $_POST["demo"];
    $gia = $_POST["txtgia"];
    settype($gia, "int");
    $tt = $_POST["trangthai"];
    settype($tt , "int");
    $idsp = $_POST["hangsx"];
    settype($idsp, "int");
    $qr =  "INSERT INTO sanpham VALUES(null,'$ten','$mota','$name','$chitiet','$gia','$tt',CURRENT_TIMESTAMP(),'$idsp')";
mysql_query($qr);
header("location:quantri1.php");
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
    <script type="text/javascript" language="javascript" src="ckeditor/ckeditor.js" ></script>
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
                        <form action="" method="POST" enctype="multipart/form-data" >  
                            <div class="form-group">
                                <label>Ten San Pham</label>
                                <input class="form-control" id="txtten" name="txtten" />
                            </div>
                            <div class="form-group">
                                <label>Mo Ta</label>
                                <textarea class="form-control" id="txtmota" name="txtmota" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hinh</label>
                                <input type="file"  name="fileToUpload" />
                            </div>

                            <div class="form-group">
                                <label>Chi Tiet</label>
                                <textarea class="form-control ckeditor" id="demo" name="demo" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Gia</label>
                                <input class="form-control" id="txtgia" name="txtgia" placeholder="Nhap Gia" />
                            </div>
                            <div class="form-group">
                                <label>Trang Thai</label>
                               <select class="form-group" name="trangthai" id="trangthai">
                                   <option value="0"> con Hang</option>
                                   <option value="1"> Het Hang</option>
                                   <option value="2"> Khuyen Mai</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label>Hang San Xuat</label>
                             <select class="form-control" name="hangsx" id="hangsx">
                                 <?php
                                   $hang = xemhang();
                                    while($row_hang = mysql_fetch_array($hang)){
                                    ?>                                
                                        <option value="<?php echo $row_hang['id'] ?>"><?php echo $row_hang['tenhang'] ?></option>
                                <?php
                            }
                                ?>
                                </select>
                            </div>
                            <button type="submit" name="btnthemsp" id="btnthemsp" class="btn btn-default">Category Add</button>
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