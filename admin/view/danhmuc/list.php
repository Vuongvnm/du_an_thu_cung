<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th class="col-2" scope="col">#</th>
      <th class="col-3" scope="col">ID</th>
      <th class="col-7" scope="col">Tên danh mục</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($list_danhmuc as $key => $dsdm) {
    ?>
      <tr>
        <th><?= ++$key ?></th>
        <td><?= $dsdm['id_dm'] ?></td>
        <td><?= $dsdm['ten_dm'] ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php?action=them_danhmuc"> Thêm mới </a>