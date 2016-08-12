 <?php
$id = $_GET['id'];
settype($id, "int");
$sp = chitietsp($id);
while($row_sp = mysql_fetch_array($sp)){
 ?>
 <div class="well" style="width:100%;height:800px;margin:10px">
                      <div class=".col-xs-6">
                                <div class="col-xs-8 col-sm-6">
                                    <a href="#">
                                        <img class="img-responsive" width="200" height="200" src="upload/<?php echo $row_sp["hinh"] ?> " alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                  <a href=""><h3 class="text-danger"><?php echo $row_sp["tensp"] ?> </h3></a>
                                    	<h5 class="text-danger">Giá: <?php echo $row_sp["gia"] ?> VND</h5>
                                      <h5 class="text-danger">Trạng Thái: <?php 
                                      if( $row_sp["trangthai"] == 0 ){
                                        echo "Còn Hàng";
                                      } else if( $row_sp["trangthai"] == 1){
                                        echo "Hết Hàng";
                                      }else{
                                        echo "Đang Khuyến Mãi";
                                      }
                                       ?></h5>
                                    <a href="index.php?p=dathang&idSP=<?php echo $row_sp['id']?>">	<button type="button" class="btn btn-success">Đặt Hàng</button></a>
                                    	<p><?php echo $row_sp["chitiet"] ?></p>
                                </div>
                            </div>
                             <div class="break"></div>
                            </div>

  <?php
}
  ?>