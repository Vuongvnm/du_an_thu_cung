<form method="POST" action="index.php?action=cap_nhat_danh_muc">
  <?php
    if(is_array($mot_danh_muc)) {
      $id_dm = $mot_danh_muc['id_dm'];
      $ten_dm = $mot_danh_muc['ten_dm'];
  ?>
  <div class="mb-3">
    <label class="form-label">Tên danh mục</label>
    <input type="text" class="form-control" name="ten_dm" value="<?=$ten_dm?>">
  </div>
  <?php
  }
  ?>
  <input type="hidden" name="id_dm" value="<?=$id_dm?>">
  <button type="submit" class="btn btn-primary" name="cap_nhat">Cập nhật</button>
  <button type="reset" class="btn btn-primary">Nhập lại</button>
</form>