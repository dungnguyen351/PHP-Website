<?php 
    if(is_array($tk)){
        extract($tk);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <H1>CẬP NHẬT TÀI KHOẢN</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatetk" method="post">
                    <div class="row mb10">
                         
                        <p type="text" name="id" >Mã TK: <?php if(isset($id)&&($id!="")) echo $id ;?></p>
                    </div>
                    <div class="row mb10">
                       
                        <p type="text" name="user">Tên đăng nhập: <?php if(isset($user)&&($user!="")) echo $user ;?></p>
                    </div>
                    <div class="row mb10">
                        Role<br>
                        <input type="text" name="role" value="<?php if(isset($role)&&($role!="")) echo $role ;?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <input type="submit"name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>