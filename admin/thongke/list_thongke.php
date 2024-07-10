<div class="row">
    <div class="row">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    <div class="row">
        <div class="row mb10">
            <table border="1px">
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHÂT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php 
                    foreach ($listthongke as $tk) {
                        extract($tk);
                        echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$avgprice.'</td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
        <div class="row">
            <a href="index.php?act=bieudo"><input type="button" value="Xem Biểu Đồ"></a>
        </div>
    </div>

</div>