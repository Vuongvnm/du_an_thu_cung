<!-- BEGIN CONTENT -->
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH SẢN PHẨM</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?action=them_san_pham" method="POST">
      <div class="row2 mb10 formds_loai">
        <table class="table">
          <thead>
          <tr>
            <th scope="col">CHỌN</th>
            <th scope="col">MÃ SẢN PHẨM</th>
            <th scope="col">TÊN SẢN PHẨM</th>
            <th scope="col">GIÁ SẢN PHẨM</th>
            <th scope="col">TUỔI</th>
            <th scope="col">GIỚI TÍNH</th>
            <th scope="col">HÌNH ẢNH</th>
            <th scope="col"-3>CHỨC NĂNG</th>
          </tr>
          </thead>
          <tbody>
          <?php
            foreach($danh_sach_san_pham as $dssp) {
              $id_sp = $dssp['id_sp'];
              $ten_sp = $dssp['ten_sp'];
              $gia_sp = $dssp['gia_sp'];
              $tuoi = $dssp['tuoi'];
              $hinh_anh = $dssp['hinh_anh'];
              $hinh_path = "../assets/uploads/" . $hinh_anh;
              if(is_file($hinh_path)) {
                $hinh = "<img src='".$hinh_path."' height='80'>";
              } else {
                $hinh = "Không có hình ảnh!";
              }
              $sua_sp = "index.php?action=sua_sp&id_sp=".$id_sp;
              $xoa_sp = "index.php?action=xoa_sp&id_sp=".$id_sp;
              $chi_tiet_san_pham = "index.php?action=chi_tiet_san_pham&id_sp=".$id_sp;
          ?>
          <tr>
            <td><input type="checkbox"></td>
            <td><?=$id_sp?></td>
            <td><?=$ten_sp?></td>
            <td><?=$gia_sp?></td>
            <td><?=$tuoi?></td>
            <?php
              foreach($danh_sach_gioi_tinh as $dsdt) {
                $id_gt = $dsdt['id_gt'];
                $ten_gt = $dsdt['ten_gt'];
                if($id_gt == hien_thi_idgt_by_idsp($id_sp)) {
                ?>
                  <td><?=$ten_gt?></td>
                <?php
                }
                ?>
              <?php
              }
              ?>
            <td><img src="<?=$hinh_path?>" width="50" height="50"></td>
            <td>
              <a href="<?=$sua_sp?>"><button type="button" class="btn btn-primary btn-sm">Sửa</button></a>
              <a href="<?=$xoa_sp?>"><button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
              <a href="<?=$chi_tiet_san_pham?>"><button type="button" class="btn btn-primary btn-sm">Chi tiết</button></a>
                </td>
          </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
        <div>
          <button type="button" class="btn btn-primary">CHỌN TẤT CẢ</button>
          <button type="button" class="btn btn-primary">BỎ CHỌN TẤT CẢ</button>
          <a href="index.php?action=them_san_pham"><button type="submit" class="btn btn-primary">THÊM MỚI</button></a>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- END CONTENT -->