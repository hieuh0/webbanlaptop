                 <?php
$sanpham = sanphamtrangchu();
 while ($row_sanpham = mysql_fetch_array($sanpham)){
                 ?>
                 <div class="well" style="width:25%;height:220px;float:right;">
                  
                      <div class="row" >
                                <div class="col-xs-6"> <a href="index.php?p=chitiet&id=<?php echo $row_sanpham['id']?>">
                                        <img class="img-responsive"  src="upload/<?php echo $row_sanpham['hinh']?>" alt="">
                                    </a></div>
                                    </div>
                                    <div class="row" >
                                <div class="col-xs-6">
            <a href="index.php?p=chitiet&id=<?php echo $row_sanpham['id']?>"><h5 class="text-danger"><?php echo $row_sanpham['tensp'] ?></h5></a>
                                    <p style="float:left">Giá:</p><p style="float:right" class="text-danger"><?php echo $row_sanpham['gia'] ?></p>
                                </div>
                                 </div>
                                                    <div class="break"></div>
                            </div>
                            <?php
                                }
                            ?>
                            
