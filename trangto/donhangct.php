<div class="a">
    <div class="a tm mb2">
        <h1>Thông tin đơn hàng</h1>
    </div>
    <div class="a formconten">
        <div class="a mb2 formds">
            <table border="1">

                <tr>
                    <th class="sp">Mã Đơn Hàng</th>
                    <th class="sp">Tên khách hàng</th>
                    <th class="sp">Phone</th>
                    <th class="sp">Email</th>
                    <th class="sp">Address</th>
                    <th class="sp">Phương thức thanh toán</th>
                    <th class="sp">Ngày đặt hàng</th>
                    <th class="sp">Tổng tiền </th>
                    <th class="sp">Trạng thái</th>
                </tr>
                <?php 
                    foreach ($list_bill as $bill) {
                        extract($bill);
                        echo '<tr>
                        <td>TAMFOOD' . $id . '</a></td>
                        <td>' . $name . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $email . '</td> 
                        <td>' . $address . '</td>
                        <td>' . $pay . '</td>
                        <td>' . $date_oder . '</td>
                        <td>' . $total. '</td> 
                    </tr>';
                    }
                ?>
            </table>
        </div>
        <!-- <div class="a mb2">

        </div> -->
</div>