<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">LapTopNews</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Trang Chủ</a></li>
          <?php
          $danhmuc = danhmuc();
          while ($row_danhmuc  = mysql_fetch_array($danhmuc)){
          $id_danhmuc = $row_danhmuc['id'];
        ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $row_danhmuc['tendanhmuc']?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $hang =  hangsx($id_danhmuc);
              while($row_hang = mysql_fetch_array($hang)){
            ?>
            <li><a href="index.php?p=tintronghang&idSP=<?php echo $row_hang['id'] ?>"><?php echo $row_hang['tenhang'] ?></a></li>
          <?php
          }
          ?>

          </ul>
            </li>
       <?php
          }
          ?>
      <li><a href="#">Giới Thiệu</a></li>      
      </ul> 
    </div>
  </div>
</nav>