<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>Gía</th>
                <th>Hình </th>
                <th>Lượt xem</th>
            </tr>
            <?php 
                foreach ($list_sp as $sanpham) {
                    extract($sanpham);
                    $link_img = "../img/" . $img;
                    $suasp = "index.php?act=suasp&id=" .$id;
                    $xoasp = "index.php?act=xoasp&id=" .$id; 
                    echo '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'. $id .'</td>
                    <td>'. $name .'</td>
                    <td>'. $price.'</td>
                    <td><img src="'. $link_img .'" width="100" height="100" alt=""></td>
                    <td>'. $luotxem .'</td>
                    <td>
                    <a href="'. $link_suasp .'"><input type="button" value="Sửa"> </a>
                    <a href="'. $link_xoasp .'"><input type="button" value="Xóa"> </a>
            
                    </td>
                </tr>';
                }
            ?>
           
           
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="admin.html"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>
    