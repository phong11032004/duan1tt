<div class="a">
    <div class="a tm mb2">
        <h1>Đơn hàng chi tiết</h1>
    </div>
    <div class="a formconten">
        <div class="a mb2 formds">
            <table border="1">

                <tr>
                    <th class="sp">Mã Đơn Hàng</th>
                    <th class="sp">ID sản phảm</th>
                    <th class="sp">Tên sản phẩm</th>
                    <th class="sp">Số lượng</th>
                </tr>
                
                <?php 
                    foreach ($list_chitietbill as $bill) {
                        extract($bill);
                        echo '<tr>
                        <td>TAMFOOD' . $idbill . '</td>
                        <td>' . $idsp . '</td>
                        <td>' . $name . '</td>
                        <td>' . $soluong . '</td>
                    </tr>';
                    }
                ?>
            </table>
        </div>
        <!-- <div class="a mb2">

        </div> -->
</div>