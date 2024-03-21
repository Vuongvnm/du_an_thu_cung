<div class="mb">
   <div class="box_title">DANH MỤC</div>
   <div class="box_content2 product_portfolio">
      <?php
      foreach ($danh_sach_danh_muc as $dsdm) {
         $ten_dm = $dsdm['ten_dm'];
      ?>
         <ul>
            <li><a href=""><?= $ten_dm ?></a></li>
         </ul>
      <?php
      }
      ?>
   </div>
   <div class="box_search">
      <form action="#" method="POST">
         <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
      </form>
   </div>
</div>