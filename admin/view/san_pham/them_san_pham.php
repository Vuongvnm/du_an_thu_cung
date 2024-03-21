<div class="row2">
  <div class="row2 font_title">
    <h1>THÊM SẢN PHẨMss</h1>
  </div>
  <form method="POST" action="index.php?action=them_san_pham" enctype="multipart/form-data">
    <select class="form-select" size="3" aria-label="Size 3 select example" name="id_dm">
      <option selected>Danh mục</option>
      <?php
      foreach ($danh_sach_danh_muc as $dsdm) {
        $id_dm = $dsdm['id_dm'];
        $ten_dm = $dsdm['ten_dm'];
      ?>
        <option value="<?=$id_dm?>"><?=$ten_dm?></option>
      <?php
      }
      ?>
    </select>
    <select class="form-select" size="3" aria-label="Size 3 select example" name="id_ms">
      <option selected>Màu sắc</option>
      <?php
      foreach ($danh_sach_mau_sac as $dsms) {
        $id_ms = $dsms['id_ms'];
        $ten_ms = $dsms['ten_ms'];
      ?>
        <option value="<?=$id_ms?>"><?=$ten_ms?></option>
      <?php
      }
      ?>
    </select>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Tên sản phẩm" name="ten_sp">
    </div>
    <div class="mb-3">
      <input type="number" class="form-control" placeholder="Giá sản phẩm" name="gia_sp">
    </div>
    <div class="mb-3">
      <input type="number" class="form-control" placeholder="Tuổi" name="tuoi">
    </div>
    <select class="form-select" size="3" aria-label="Size 3 select example" name="id_gt">
      <option selected>Giới tính</option>
      <?php
      foreach ($danh_sach_gioi_tinh as $dsgt) {
        $id_gt = $dsgt['id_gt'];
        $ten_gt = $dsgt['ten_gt'];
      ?>
        <option value="<?=$id_gt?>"><?=$ten_gt?></option>
      <?php
      }
      ?>
    </select>
    <div class="mb-3">
      <input type="file" class="form-control" placeholder="Hình ảnh" name="hinh_anh">
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Nguồn gốc" name="nguon_goc">
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Số lượng" name="so_luong">
    </div>
    <select class="form-select" size="3" aria-label="Size 3 select example" name="id_tc">
      <option selected>Tiêm chủng</option>
      <?php
      foreach ($danh_sach_tiem_chung as $dstc) {
        $id_tc = $dstc['id_tc'];
        $trang_thai = $dstc['trang_thai'];
      ?>
        <option value="<?=$id_tc?>"><?=$trang_thai?></option>
      <?php
      }
      ?>
    </select>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Ghi chú" name="ghi_chu">
    </div>
    <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
  </form>
</div>