<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th class="col-1" scope="col">ID</th>
      <th class="col-2" scope="col">Tên</th>
      <th class="col-1" scope="col">Màu</th>
      <th class="col-2" scope="col">Giá</th>
      <th class="col-1" scope="col">Tuổi</th>
      <th class="col-1" scope="col">Giới Tính</th>
      <th class="col-2" scope="col">Nguồn gốc</th>
      <th class="col-1" scope="col">Chi tiết</th>
      <th class="col-1" scope="col">Sửa</th>
      <th class="col-1" scope="col">Xoá</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($listThucung as $key => $item) {
    ?>
      <tr>
        <td><?= $item['id_sp'] ?></td>
        <td><?= $item['ten'] ?></td>
        <td><?= $item['id_mausac'] ?></td>
        <td><?= $item['gia'] ?></td>
        <td><?= $item['tuoi'] ?></td>
        <td><?= $item['gioitinh'] ?></td>
        <td><?= $item['nguon_goc'] ?></td>
        <td><a class="btn btn-warning" href="index.php?chucnang=chitietsanpham&id=<?=$item['id_sp']?>">Chi Tiết</a></td>
        <td><a class="btn btn-warning" href="index.php?chucnang=suasanpham&id=<?=$item['id_sp']?>">Sửa</a></td>
        <td><a class="btn btn-warning" href="index.php?chucnang=xoasanpham&id=<?=$item['id_sp']?>">Xoá</a></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php?chucnang=themsanpham"> Thêm mới </a>