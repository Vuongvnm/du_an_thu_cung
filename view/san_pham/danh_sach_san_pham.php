  <main class="catalog mb">
    <div class="boxleft">
      <!-- BANNER -->
      <?php
        require_once "./view/thuoc_tinh/banner.php";
      ?>
      <!-- END BANNER -->
      <div class="items">
        <?php
        foreach ($danh_sach_san_pham as $dssp) {
          $ten_sp = $dssp['ten_sp'];
          $gia_sp = $dssp['gia_sp'];
          $hinh_anh = $dssp['hinh_anh'];
          $hinh_path = "../du_an_thu_cung/assets/uploads/" . $hinh_anh;
          if(is_file($hinh_path)) {
            $hinh = "<img src='".$hinh_path."' height='80'>";
          } else {
            $hinh = "Không có hình ảnh!";
          }
        ?>
          <div class="box_items">
            <div class="box_items_img">
              <img src="<?=$hinh_path?>"/>
              <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href=""><?=$ten_sp?></a>
            <p class="price"><?=$gia_sp?></p>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="boxright">
      <!-- TÀI KHOẢN -->
      <?php
        require_once "./view/thuoc_tinh/tai_khoan.php";
      ?>
      <!-- DANH MỤC -->
      <?php
        require_once "./controller/thuoc_tinh/danh_muc.php";
      ?>
      <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
      <?php
        require_once "./controller/thuoc_tinh/ban_chay.php";
      ?>
    </div>
  </main>
  </div>
  <script src="main.js"></script>
  </body>
  </html>