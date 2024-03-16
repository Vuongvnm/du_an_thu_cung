<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th class="col-2" scope="col">#</th>
      <th class="col-2" scope="col">ID</th>
      <th class="col-3" scope="col">Tên danh mục</th>
      <th class="col-3" scope="col">Chi tiết</th>
      <th class="col-1" scope="col">Sửa</th>
      <th class="col-1" scope="col">Xoá</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($list_danhmuc as $key => $dsdm) {
    ?>
      <tr>
        <th><?= ++$key ?></th>
        <td><?= $dsdm['id_dm'] ?></td>
        <td><?= $dsdm['ten_danhmuc'] ?></td>
        <td><a class="btn btn-warning" href="index.php?action=listsanpham&id=<?=$dsdm['id_dm']?>">Chi Tiết</a></td>
        <td><a class="btn btn-warning" href="index.php?action=suadanhmuc&id=<?=$dsdm['id_dm']?>">Sửa</a></td>
        <td><a class="btn btn-warning" href="index.php?action=xoadanhmuc&id=<?=$dsdm['id_dm']?>">Xoá</a></td>
      </tr>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php?action=them_danhmuc"> Thêm mới </a>