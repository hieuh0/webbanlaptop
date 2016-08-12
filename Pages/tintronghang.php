<?php
$idhang = $_GET['idSP'];
settype($idhang, "int");
$hang = xemtintronghang($idhang);
while($row_hang = mysql_fetch_array($hang)){
?>
 <div class="well" style="width:25%;height:220px;float:right;">
                  
                      <div class="row" >
                                <div class="col-xs-6"> <a href="index.php?p=chitiet&id=<?php echo $row_hang['id']?>">
                                        <img class="img-responsive"  src="upload/<?php echo $row_hang['hinh'] ?>" alt="">
                                    </a></div>
                                    </div>
     <div class="row" >
                                <div class="col-xs-6">
           <h5 class="text-danger"><?php echo $row_hang['tensp'] ?></h5>
           <p style="float:left">Giá:</p><p style="float:right" class="text-danger"><?php echo $row_hang['gia'] ?></p>
                                </div>
                                 </div>
                                 <div class="break"></div>
                            </div>
      
<?php
}
?>
