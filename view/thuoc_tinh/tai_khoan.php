<div class="mb">
   <div class="box_title">TÀI KHOẢN</div>
   <div class="box_content form_account">
      <form action="index.php?action=dang_nhap" method="POST">

      </form>
      <div class="form-floating mb-3">
         <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
         <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
         <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
         <label for="floatingPassword">Password</label>
      </div>
      <input type="checkbox" name="">Ghi nhớ tài khoản?
      <div>
         <button type="button" class="btn btn-primary">Đăng nhập</button>
         <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Đăng ký</button>
      </div>
      <p><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Quên mật khẩu</a></p>
      <p><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Đăng ký thành viên</a></p>
   </div>
</div>
<!-- Full screen modal -->
<form action="index.php?action=dang_ky" method="post">
   <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="myModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="myModal">Đăng ký tài khoản</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Tên đăng nhập" name="ten_nguoi_dung" required>
                  <label for="floatingInput">Tên đăng nhập</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" required>
                  <label for="floatingInput">Email</label>
               </div>
               <div class="form-floating">
                  <input type="password" class="form-control" id="floatingpassword" placeholder="Mật khẩu" name="mat_khau" required>
                  <label for="floatingPassword">Mật khẩu</label>
               </div>
            </div>
            <div class="modal-footer">
               <button type="reset" class="btn btn-secondary">Nhập lại</button>
               <button type="submit" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" name="dang_ky">Đăng ký</button>
            </div>
         </div>
      </div>
   </div>
</form>