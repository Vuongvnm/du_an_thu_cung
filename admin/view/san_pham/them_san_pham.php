<form method="POST" action="index.php?action=them_san_pham" enctype="multipart/form-data">
  <select name="id_dm">
    <label class="form-label">Danh mục</label>
    <option value="0">Tất cả</option>
    <?php
      foreach($danh_sach_danh_muc as $dsdm) {
        $id_dm = $dsdm['id_dm'];
        $ten_dm = $dsdm['ten_dm'];
    ?>
    <option value="<?=$id_dm?>"><?=$ten_dm?></option>
    <?php
    }
    ?>
  </select>
  <select name="id_ms">
    <label class="form-label">Màu sắc</label>
    <option value="0">Tất cả</option>
    <?php
      foreach($danh_sach_mau_sac as $dsms) {
        $id_ms = $dsms['id_ms'];
        $ten_ms = $dsms['ten_ms'];
    ?>
    <option value="<?=$id_ms?>"><?=$ten_ms?></option>
    <?php
    }
    ?>
  </select>
  <div class="mb-3">
    <label class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="ten_sp">
  </div>
  <div class="mb-3">
    <label class="form-label">Giá sản phẩm</label>
    <input type="number" class="form-control" name="gia_sp">
  </div>
  <div class="mb-3">
    <label class="form-label">Tuổi</label>
    <input type="number" class="form-control" name="tuoi">
  </div>
  <div class="mb-3">
    <label class="form-label">Giới tính</label>
    <input type="text" class="form-control" name="gioi_tinh">
  </div>
  <div class="mb-3">
    <label class="form-label">Hình ảnh</label>
    <input type="file" class="form-control" name="hinh_anh">
  </div>
  <div class="mb-3">
    <label class="form-label">Nguồn gốc</label>
    <input type="text" class="form-control" name="nguon_goc">
  </div>
  <div class="mb-3">
    <label class="form-label">Tiêm chủng</label>
    <input type="text" class="form-control" name="tiem_chung">
  </div>
  <div class="mb-3">
    <label class="form-label">Ghi chú</label>
    <input type="text" class="form-control" name="ghi_chu">
  </div>
  <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
</form>