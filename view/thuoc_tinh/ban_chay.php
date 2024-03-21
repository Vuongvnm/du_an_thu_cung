<div class="mb">
   <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
   <div class="box_content">
      <?php
         foreach($san_pham_ban_chay  as $spbc) {
            $ten_sp = $spbc['ten_sp'];
            $hinh_anh = $spbc['hinh_anh'];
            $hinh_path = "../du_an_thu_cung/assets/uploads/" . $hinh_anh;
            if(is_file($hinh_path)) {
               $hinh = "<img src='".$hinh_path."' height='80'>";
            } else {
               $hinh = "Không có hình ảnh!";
            }
      ?>
      <div class="selling_products" style="width:100%;">
         <img src="<?=$hinh_path?>" alt="anh">
         <a href=""><?=$ten_sp?></a>
      </div>
      <?php
      }
      ?>
      <div class="selling_products" style="width:100%;">
         <img src="./img/clockforgirl.jpg" alt="anh">
         <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
         <img src="./img/clockforgirl.jpg" alt="anh">
         <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
         <img src="./img/clockforgirl.jpg" alt="anh">
         <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
         <img src="./img/clockforgirl.jpg" alt="anh">
         <a href="">Đồng hồ đeo tay nữ</a>
      </div>
   </div>
</div>