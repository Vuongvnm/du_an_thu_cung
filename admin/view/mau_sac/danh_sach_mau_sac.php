<!-- BEGIN CONTENT -->
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH MÀU SẮC</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?action=them_mau_sac" method="POST">
      <div class="row2 formds_loai">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">CHỌN</th>
              <th scope="col">MÃ MÀU SẮC</th>
              <th scope="col">TÊN MÀU SẮC</th>
              <th scope="col-3">CHỨC NĂNG</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($danh_sach_mau_sac as $dsms) {
              $id_ms = $dsms['id_ms'];
              $ten_ms = $dsms['ten_ms'];
              $sua_ms = "index.php?action=sua_ms&id_ms=".$id_ms;
              $xoa_ms = "index.php?action=xoa_ms&id_ms=".$id_ms;
              $chi_tiet_mau_sac = "index.php?action=chi_tiet_mau_sac&id_ms=".$id_ms;
            ?>
              <tr>
                <td><input type="checkbox" scope="row"></td>
                <td><?=$id_ms?></td>
                <td><?=$ten_ms?></td>
                <td>
                  <a href="<?=$sua_ms?>"><button type="button" class="btn btn-primary btn-sm">Sửa</button></a>
                  <a href="<?=$xoa_ms?>"><button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
                  <a href="<?=$chi_tiet_mau_sac?>"><button type="button" class="btn btn-primary btn-sm">Chi tiết</button></a>
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