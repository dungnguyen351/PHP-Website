<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="row boxcontent billform">
                    <table>
                        <?php 
                        
                            if(isset($_SESSION['user'])){
                                $user=$_SESSION['user']['user'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                            }else{
                                $user="";
                                $address="";
                                $email="";
                                $tel="";
                            }
                        
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="user" value="<?=$user?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                </div>
            </div>   
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt">Thanh toán online</td>
                        </tr>
                    </table>

                </div>

            </div>

            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="../images/hinh22.jpg" alt="" height="80px"></td>
                            <td>Đồng hồ</td>
                            <td>50</td>
                            <td>2</td>
                            <td>200.000</td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="../images/hinh22.jpg" alt="" height="80px"></td>
                            <td>Đồng hồ</td>
                            <td>50</td>
                            <td>2</td>
                            <td>200.000</td>

                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="Đồng ý đặt hàng">
            </div>

        </form>

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"?>

    </div>

</div>