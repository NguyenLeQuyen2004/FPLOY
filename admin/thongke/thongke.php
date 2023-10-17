<div class="row2">
    <div class="row2 font_title">
        <h1>THỐNG KÊ</h1>
    </div>
    <div class="row2 form_content ">
        <?php foreach ($thongke as $tke) : ?>
            <?php extract($tke);
            ?>
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG SP</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ TB</th>
                        </tr>
                        <tr>
                            <td><?= $iddm ?></td>
                            <td><?= $tendm ?></td>
                            <td><?= $slsp ?></td>
                            <td><?= number_format($minsp, 0, ',', '.') ?></td>
                            <td><?= number_format($maxsp, 0, ',', '.') ?></td>
                            <td><?= number_format($avgsp, 0, ',', '.') ?></td>
                        </tr>
                    </table>
                </div>
            </form>
        <?php endforeach ?>
    </div>
</div>
</div>
