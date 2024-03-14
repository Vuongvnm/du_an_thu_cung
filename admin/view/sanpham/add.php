<form method="POST" action="index.php?action=themsanpham">
<div class="mb-3">
<label for="" class="form-label">Danh mục thú cưng</label>
  <select class="form-select" name="" id="">
  <?php
    foreach ($listDanhMuc as $item){
    ?>
    <option value="<?= $item['id_dm'] ?>"><?= $item['ten_danhmuc'] ?></option>
    <?php }?>
  </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tên thú cưng</label>
    <input type="text" class="form-control" id="" name="ten">
  </div>
  <div class="mb-3">
    <label  for="" class="form-label">Màu sắc</label>
    <select class="form-select" name="" id="" >
    <?php
    foreach ($listmausac as $item){
    ?>
    <option value="<?= $item['id_mausac'] ?>"><?= $item['ten_mau'] ?></option>
    <?php }?>

    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tuổi</label>
    <input type="number" class="form-control" id="" name="tuoi">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Giá</label>
    <input type="text" class="form-control" id="" name="gia">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nguồn gốc</label>
    <input type="text" class="form-control" id="" name="nguongoc">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tiêm chủng</label>
    <select name="" class="form-select" id="">
      <option value="1">Đã tiêm chủng</option>
      <option value="0">Chưa tiêm chủng</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Số lượng</label>
    <input type="number" class="form-control" id="" name="soluong">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ghi chú</label>
    <input type="text" class="form-control" id="" name="ghichu">
  </div>
  <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
</form>