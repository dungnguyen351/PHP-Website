<div  class="row mb">
    <div class="boxtrai mr">
        <div class=""row mb>
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart ">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        $tong=0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $img_path.$cart[2];
                            $ttien = $cart[3]*$cart[4];
                            $tong += $ttien;
                            $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';

                            echo '<tr>
                                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                    <td>'.$cart[1].'</td>
                                    <td>'.$cart[3].'</td>
                                    <td>'.$cart[4].'</td>
                                    <td>'.$ttien.'</td>
                                    <td>'.$xoasp.'</td>
                                </tr>';
                            $i+=1;
                        }

                        echo '<tr>
                                <td colspan="4">Tổng đơn hàng </td>
                                
                                <td>'.$tong.'</td>
                                <td></td>
                            </tr>';
                    ?>
                    <!-- <tr>
                        <td>1</td>
                        <td><img src="" alt="" height="80px"></td>
                        <td>Áo thun</td>
                        <td>50</td>
                        <td>2</td>
                        <td>200.000 VND</td>
                        <td><input type="button" value="Xóa"></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><img src="" alt="" height="80px"></td>
                        <td>Áo thun đen</td>
                        <td>120</td>
                        <td>3</td>
                        <td>300.000 VND</td>
                        <td><input type="button" value="Xóa"></td>
                    </tr> -->

                </table>
            </div>
        </div>

        <div class="row mb bill">
            <a href="index.php?act=bill">
                <input type="button" value="ĐỒNG Ý ĐẶT HÀNG">
            </a>
                
            <a href="index.php?act=delcart">
                <input type="button" value="XÓA GIỎ HÀNG">
            </a>
        </div>
    </div>
    <div class="boxphai">
            <?php
                include "view/boxright.php";
            ?>

        </div>

</div>