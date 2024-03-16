<!-- BEGIN CONTENT -->
<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH DANH MỤC</h1>
  </div>
  <div class="row2 form_content ">
    <form action="#" method="POST">
      <div class="row2 mb10 formds_loai">
      <div class="row mb10 ">
        <input class="mr20" type="button" value="CHỌN TẤT CẢ">
        <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="index.php?action=them_danh_muc"><input class="mr20" type="button" value="NHẬP THÊM"></a>
      </div>
        <table>
          <tr>
            <th>CHỌN</th>
            <th>MÃ DANH MỤC</th>
            <th>TÊN DANH MỤC</th>
            <th>CHỨC NĂNG</th>
            <th></th>
          </tr>
          <?php
            foreach($danh_sach_danh_muc as $dsdm) {
              $id_dm = $dsdm['id_dm'];
              $ten_dm = $dsdm['ten_dm'];
              $sua_dm = "index.php?action=sua_dm&id_dm=".$id_dm;
              $xoa_dm = "index.php?action=xoa_dm&id_dm=".$id_dm;
          ?>
          <tr>
            <td><input type="checkbox"></td>
            <td><?=$id_dm?></td>
            <td><?=$ten_dm?></td>
            <td><a href="<?=$sua_dm?>"><input type="button" value="Sửa"></a> <a href="<?=$xoa_dm?>"><input type="button" value="Xóa" onclick="return confirm('Bạn có muốn xóa không?')"></td></a>
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