<div  class="row mb">
    <div class="boxtrai mr">
        <div class=""row mb>
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart ">
                <table>
                    
                    <?php
                        viewcart(1);
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
                <input type="button" value="TIẾP TỤC ĐẶT HÀNG">
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