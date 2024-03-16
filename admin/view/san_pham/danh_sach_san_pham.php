<!-- BEGIN CONTENT -->
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH SẢN PHẨM</h1>
  </div>
  <div class="row2 form_content ">
    <form action="#" method="POST">
      <div class="row2 mb10 formds_loai">
      <div class="row mb10 ">
        <input class="mr20" type="button" value="CHỌN TẤT CẢ">
        <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="index.php?action=them_san_pham"><input class="mr20" type="button" value="NHẬP THÊM"></a>
      </div>
        <table>
          <tr>
            <th>CHỌN</th>
            <th>MÃ SẢN PHẨM</th>
            <th>TÊN SẢN PHẨM</th>
            <th>GIÁ SẢN PHẨM</th>
            <th>TUỔI</th>
            <th>GIỚI TÍNH</th>
            <th>HÌNH ẢNH</th>
            <th>NGUỒN GỐC</th>
            <th>TIÊM CHỦNG</th>
            <th>SỐ LƯỢNG</th>
            <th>GHI CHÚ</th>
            <th>NGÀY TẠO</th>
            <th>NGÀY CẬP NHẬT</th>
            <th>CHỨC NĂNG</th>
            <th></th>
          </tr>
          <?php
            foreach($danh_sach_san_pham as $dssp) {
              $id_sp = $dssp['id_dm'];
              $ten_sp = $dssp['ten_sp'];
              $gia_sp = $dssp['gia_sp'];
              $tuoi = $dssp['tuoi'];
              $gioi_tinh = $dssp['gioi_tinh'];
              $hinh_anh = $dssp['hinh_anh'];
              $nguon_goc = $dssp['nguon_goc'];
              $tiem_chung = $dssp['tiem_chung'];
              $so_luong = $dssp['so_luong'];
              $ghi_chu = $dssp['ghi_chu'];
              $ngay_tao = $dssp['ngay_tao'];
              $ngay_cap_nhat = $dssp['ngay_cap_nhat'];
              $hinh_path = "../upload/" . $hinh_anh;
              if(is_file($hinh_path)) {
                $hinh = "<img src='".$hinh_path."' height='80'>";
              } else {
                $hinh = "Không có hình ảnh!";
              }
              $sua_sp = "index.php?action=sua_sp&id_sp=".$id_sp;
              $xoa_sp = "index.php?action=xoa_sp&id_sp=".$id_sp;
          ?>
          <tr>
            <td><input type="checkbox"></td>
            <td><?=$id_sp?></td>
            <td><?=$ten_sp?></td>
            <td><?=$gia_sp?></td>
            <td><?=$tuoi?></td>
            <td><?=$gioi_tinh?></td>
            <td><img src="<?=$hinh_path?>" width="100" height="100"></td>
            <td><?=$nguon_goc?></td>
            <td><?=$tiem_chung?></td>
            <td><?=$so_luong?></td>
            <td><?=$ghi_chu?></td>
            <td><?=$ngay_tao?></td>
            <td><?=$ngay_cap_nhat?></td>
            <td><a href="<?=$sua_sp?>"><input type="button" value="Sửa"></a> <a href="<?=$xoa_sp?>"><input type="button" value="Xóa" onclick="return confirm('Bạn có muốn xóa không?')"></td></a>
          </tr>
          <?php
          }
          ?>
        </table>
      </div>
    </form>
  </div>
</div>
<!-- END CONTENT -->