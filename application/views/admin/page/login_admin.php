<!DOCTYPE html>
<html>
  <head>
    <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/bootstrap/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/admin/styles.css" rel="stylesheet" media="screen">
        <script src="<?php echo base_url();?>asset/bootstrap/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" name="login" action="<?php echo base_url();?>Admin/dangnhap" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Tài Khoản</label>
          <input type="text" class="form-control" name="username" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mật Khẩu</label>
          <input type="password" class="form-control" name="password" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
      </form> 
    <!-- /container -->
    <script src="<?php echo base_url();?>asset/bootstrap/vendors/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>