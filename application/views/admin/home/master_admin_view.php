<!DOCTYPE html>
<html>
<head>
	<title></title>
       <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <script src="<?php echo base_url();?>asset/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
</head>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <a class="navbar-brand text-white" href="<?php echo base_url();?>Admin/trangchu">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNav">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item btn btn-primary"> Xin Chào, <?php echo $this->session->userdata['username']?>
                </li>
                <li class="nav-item btn btn-primary">
                <a class="text-white" href="<?php echo base_url();?>Admin/dangxuat">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<br>
<div class="container-fluid">
    <div class="row row-no-gutters">
        <div class="col-3">
          <ul class="list-group ">
              <a href="<?php echo base_url();?>admin/quantri" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($quantri)? "active" : "";  ?>" >Quản Trị 
            </a>
              <a href="<?php echo base_url();?>admin/nguoidung" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($nguoidung)? "active" : "";  ?>">Người Dùng 
            </a>
              <a href="<?php echo base_url();?>admin/phim" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($phim)? "active" : "";  ?>">Phim 
            </a>
            <a href="<?php echo base_url();?>admin/tapphim" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($tapphim)? "active" : "";  ?>" >Tập Phim
            </a>
            <a href="<?php echo base_url();?>admin/phim_dienvien" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($phim_dienvien)? "active" : "";  ?>" >Phim - Diển Viên
            </a>
            <a href="<?php echo base_url();?>admin/phim_daodien" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($phim_daodien)? "active" : "";  ?>" >Phim - Đạo Diển
            </a>
            <a href="<?php echo base_url();?>admin/phim_quocgia" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($phim_quocgia)? "active" : "";  ?>" >Phim - Quốc Gia
            </a>
            <a href="<?php echo base_url();?>admin/phim_theloai" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($phim_theloai)? "active" : "";  ?>" >Phim - Thể Loại
            </a>
              <a href="<?php echo base_url();?>admin/loaiphim" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($loaiphim)? "active" : "";  ?>">Loại Phim 
            </a>
              <a href="<?php echo base_url();?>admin/theloai" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($theloai)? "active" : "";  ?>">Thể Loại
            </a>
            <a href="<?php echo base_url();?>admin/quocgia" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($quocgia)? "active" : "";  ?>" >Quốc Gia
            </a>
            <a href="<?php echo base_url();?>admin/daodien" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($daodien)? "active" : "";  ?>" >Đạo diển
            </a>
              <a href="<?php echo base_url();?>admin/dienvien" class="list-group-item d-flex justify-content-between align-items-center <?php echo isset($dienvien)? "active" : "";  ?>">Diển Viên
            </a>
            </ul>
        </div>
        <div class="col-9">
             <?php echo isset($subview)?$subview:""; ?>
        </div>
    </div>
</div>