<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN TRỊ WEBSITE</title>
    <link rel="stylesheet" href="../view/css/style.css">
</head>

<body>
    <div class="boxcenter">
        <div class="row mb headeradmin">
            <H1> QUẢN TRỊ WEBSITE </H1>
            
                <?php
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                ?>
                    <div class="row">
                        Xin chào<br>
                        <?=$user?>
                    </div>
                    <div class="row">
                        <a href="../index.php">Thoát</a>
                    </div>
                <?php
                }
                ?>
            
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>
                <li><a href="index.php?act=addsp">Sản phẩm</a></li>
                <?php
                if($role==1){
                ?>
                <li>
                    <a href="index.php?act=dskh">Khách hàng</a>
                </li>
                <?php
                }
                ?>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
                
            </ul>
                
        </div>