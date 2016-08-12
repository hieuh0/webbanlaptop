 <?php
$id = $_GET['idSP'];
settype($id, "int");
$sp = chitietsp($id);
while($row_sp = mysql_fetch_array($sp)){
 ?>
 <img class="img-responsive" width="200" height="200" src="upload/<?php echo $row_sp["hinh"] ?> " alt="">
  <?php
}
  ?>
<?php
if(isset($_POST["btndathang"])){
  $ten = $_POST["ten"];
  $dt = $_POST["dienthoai"];
  $dc = $_POST["diachi"];
  $qr = "INSERT INTO dathang VALUES (null,'$ten','$dt','$dc','$id',null,0)";
    mysql_query($qr);
}
?>

   <form action="" method="POST" role="form">
  <div class="form-group">
    <label for="ten">Họ Tên</label>
    <input type="text" class="form-control" name="ten" id="ten">
  </div>
  <div class="form-group">
    <label for="dienthoai">Điện Thoại</label>
    <input type="text" class="form-control" name="dienthoai" id="dienthoai">
  </div>
  <div class="form-group">
    <label for="diachi">Địa Chỉ</label>
    <input type="text" name="diachi" class="form-control" id="diachi">
  </div>
  <button type="submit" name="btndathang" id="btndathang" class="btn btn-default">Hoàn Tất</button>
</form>
