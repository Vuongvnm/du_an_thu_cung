<div class="row2">
  <div class="row2 font_title">
    <h1>CẬP NHẬT MÀU SẮC</h1>
  </div>
  <form method="POST" action="index.php?action=cap_nhat_mau_sac">
    <?php
      if(is_array($mot_mau_sac)) {
        $id_ms = $mot_mau_sac['id_ms'];
        $ten_ms = $mot_mau_sac['ten_ms'];
      ?>
      <div class="mb-3">
      <input type="text" class="form-control" id="exampleFormControlInput1" name="ten_ms" value="<?=$ten_ms?>">
      </div>
    <?php
    }
    ?>
    <input type="hidden" name="id_ms" value="<?=$id_ms?>">
    <button type="submit" class="btn btn-primary" name="cap_nhat">Cập nhật</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
  </form>
</div>