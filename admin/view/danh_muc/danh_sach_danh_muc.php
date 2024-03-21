<!-- BEGIN CONTENT -->
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH DANH MỤC</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?action=them_danh_muc" method="POST">
      <div class="row2 formds_loai">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">CHỌN</th>
              <th scope="col">MÃ DANH MỤC</th>
              <th scope="col">TÊN DANH MỤC</th>
              <th scope="col-3">CHỨC NĂNG</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($danh_sach_danh_muc as $dsdm) {
              $id_dm = $dsdm['id_dm'];
              $ten_dm = $dsdm['ten_dm'];
              $sua_dm = "index.php?action=sua_dm&id_dm=".$id_dm;
              $xoa_dm = "index.php?action=xoa_dm&id_dm=".$id_dm;
              $chi_tiet_danh_muc = "index.php?action=chi_tiet_danh_muc&id_dm=".$id_dm;
            ?>
              <tr>
                <td><input type="checkbox" scope="row"></td>
                <td><?= $id_dm ?></td>
                <td><?= $ten_dm ?></td>
                <td>
                  <a href="<?=$sua_dm?>"><button type="button" class="btn btn-primary btn-sm">Sửa</button></a>
                  <a href="<?=$xoa_dm?>"><button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
                  <a href="<?=$chi_tiet_danh_muc?>"><button type="button" class="btn btn-primary btn-sm">Chi tiết</button></a>
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
          <a href="index.php?action=them_danh_muc"><button type="submit" class="btn btn-primary">THÊM MỚI</button></a>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- END CONTENT -->