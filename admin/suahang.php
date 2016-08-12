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
$row_hang = chitiethangsx($id);

?>

<?php
if(isset($_POST["btnsuahang"])){
    $ten = $_POST["txtname"];
    $dm = $_POST["iddm"];
    $qr = " UPDATE hangsx SET tenhang = '$ten', iddm = '$dm' WHERE id = '$id' ";
        mysql_query($qr);
        header("location:hangsx.php");
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
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Ten Danh Muc</label>
                                <input id="txtname" value="<?php echo $row_hang["tenhang"]?>" class="form-control" name="txtname" placeholder="Nhap Ten Danh Muc" />
                            </div>
                      
                            	<div class="form-group">
                                <label>Danh Muc</label>
                                <select id="iddm"  name="iddm" class="form-control">
                                  <?php
                                  	$dm = danhmuc();
                                  	while($row_dm = mysql_fetch_array($dm)){
                                  ?>
                                    <option <?php if($row_dm["id"] == $row_hang["iddm"]) echo "selected='selected'";?> value="<?php echo $row_dm["id"] ?>"> <?php echo $row_dm["tendanhmuc"] ?> </option>
                                  <?php
                                  }
                                  ?> 
                                </select>
                            </div>
                            <button type="submit" name="btnsuahang" id="btnsuahang" class="btn btn-default">sua</button>
                            <button type="reset" class="btn btn-default">huy</button>
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
