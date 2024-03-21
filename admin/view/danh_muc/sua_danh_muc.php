<div class="row2">
  <div class="row2 font_title">
    <h1>CẬP NHẬT DANH MỤC</h1>
  </div>
  <form method="POST" action="index.php?action=cap_nhat_danh_muc">
    <?php
      if(is_array($mot_danh_muc)) {
        $id_dm = $mot_danh_muc['id_dm'];
        $ten_dm = $mot_danh_muc['ten_dm'];
      ?>
      <div class="mb-3">
      <input type="text" class="form-control" id="exampleFormControlInput1" name="ten_dm" value="<?=$ten_dm?>">
      </div>
    <?php
    }
    ?>
    <input type="hidden" name="id_dm" value="<?=$id_dm?>">
    <button type="submit" class="btn btn-primary" name="cap_nhat">Cập nhật</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
  </form>
</div>