<?php
require "lib/config.php";
require "lib/trangchu.php";
if( isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";

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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
</head>

<body>
  <div class="container">
  <?php
  require "block/menu.php"
  ?>
  </div>
    <div class="container">

        <!-- slider -->
        <?php require "block/slide.php" ?>
        <!-- end slide -->

        <div class="space20"></div>
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Sản Phẩm Mới</h2>
                    </div>

                    <div class="panel-body">
                    <?php
                    switch ($p) {
                        case "tintronghang":
                            require "Pages/tintronghang.php";
                            break;
                        case "chitiet" :
                        require "Pages/chitiet.php";
                            break;
                        case "dathang" :
                        require "Pages/dathang.php";
                            break;
                        default:
                            require "Pages/trangchu.php";
                            break;
                    }
                    ?>
        </div>
    </div>
    </div>
    <hr>
    <footer>
       <?php require "block/footer.php"; ?>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>
