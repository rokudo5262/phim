<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	h5
  	{
	    overflow: hidden;
	    white-space: nowrap; 
	    text-overflow: ellipsis;
  	}
  	p
  	{
  		overflow: hidden;
	    white-space: nowrap; 
	    text-overflow: ellipsis;
  	}
	#img
	{
	    display: block;
	    width: 100%;
	    height: 200px;
	}
 	img:hover
	{
	    opacity: 0.5;
	}
	#card
	{
	    width: 10rem;
	    float: left;
	    padding: 5px;
    }
	</style>
</head>
<body>
	<nav aria-label="breadcrumb">
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item" ><a href="<?php echo base_url();?>Home/trangchu">Home</a></li>
	      <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
	    </ol>
	</nav>
      <div class="card">
        <h5 class="card-header bg-info"><?php echo $chitiet[0]['TenPhim']?></h5>
        <div class="card-body">
        	<div class="container-fluid">
			  <div class="row" style="padding: 10px;  border-radius: 5px;">
			  	<div class="col-2"></div>
			    <div class="col-4">
			    	<img style="width: 100%; float: right;" class="align-top" src="<?php echo base_url();?>asset/image/<?php echo $chitiet[0]['HinhAnh']?>">
			    </div>
			    <div class="col-4">
			    	<div>
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item">
						    	<p>thời lượng : <?php echo $chitiet[0]['ThoiLuong']?> phút</p>
						    </li>
						    <li class="list-group-item">
						    	<p>Năm xuất Bản: <?php echo $chitiet[0]['NamXuatBan']?></p>
						    </li>
						    <li class="list-group-item">
						    	<p>Trạng Thái : <?php echo $chitiet[0]['TrangThai']?></p>
						    </li>
						    <li class="list-group-item">
						    	<p>Thể Loại : <?php foreach ($chitiet3 as $dm):?><a href=""><?= $dm['TenTheLoai']?></a> <?php endforeach;?>
						    	</p>
						    </li>
						    <li class="list-group-item">
						    	<p>quốc gia : <?php foreach ($chitiet as $dm):?><a href=""><?= $dm['TenQuocGia']?></a> <?php endforeach;?>
						    	</p>
						    </li>
						    <li class="list-group-item">
						    	<p>đạo diển : <?php foreach ($chitiet2 as $dm):?><a href=""><?= $dm['TenDaoDien']?></a> <?php endforeach;?>
						    	</p>
						    </li>
						    <li class="list-group-item">
						    	<p>Loại Phim : </p>
						    </li>
						  </ul>
						</div>
			    	<a class="btn btn-success my-2 my-sm-0"  target="_blank" href="<?php echo base_url();?>Home/taive">Download
			    	</a>
			    	<a class="btn btn-primary my-2 my-sm-0" href="<?php echo base_url();?>Home/xemphim/<?php echo $chitiet[0]['MaPhim']?>/<?php echo $chitiet5[0]['MaTap']?>">Xem Phim
			    	</a>
			    </div>
			    <div class="col-2"></div>
			  </div>
	        </div>
	      </div>
	      <div class="card-footer bg-info"></div>
	    <div class="card">
        	<h5 class="card-header bg-info">Thông tin Phim <?php echo $chitiet[0]['TenPhim']?></h5>
        	<div class="card-body">
        		<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Trailer</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tóm Tắt</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="daodien-tab" data-toggle="tab" href="#daodien" role="tab" aria-controls="contact" aria-selected="false">Đạo Diển</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="dienvien-tab" data-toggle="tab" href="#dienvien" role="tab" aria-controls="contact" aria-selected="false">Diển Viên</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				        <div class="embed-responsive embed-responsive-16by9">
							<iframe width="auto" height="auto" src="https://www.youtube.com/embed/<?php echo $chitiet[0]['Trailer']?>" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
							</iframe>
				        </div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  <?php echo $chitiet[0]['TomTat']?>	
					</div>
					<div class="tab-pane fade" id="daodien" role="tabpanel" aria-labelledby="daodien-tab">
						<?php foreach ($chitiet2 as $dm):?>
							<div class="card" id="card">
					              <img src="<?php echo base_url();?>asset/image/director/<?php echo $dm['hinhanh_daodien']?>" class="card-img-top">
					            </a>
					            <div class="card-body" >
					              <h5 class="card-title"><?php echo $dm['TenDaoDien']?></h5>
					            </div>
					        </div> 
						<?php endforeach;?> 
					</div>
					<div class="tab-pane fade" id="dienvien" role="tabpanel" aria-labelledby="dienvien-tab">
						<?php foreach ($chitiet4 as $dm):?>
							<div class="card" id="card">
					              <img src="<?php echo base_url();?>asset/image/actor/<?php echo $dm['hinhanh_dienvien']?>" class="card-img-top">
					            </a>
					            <div class="card-body" >
					              <h5 class="card-title"><?php echo $dm['TenDienVien']?></h5>
					              <p><?php echo $dm['ThuVai']?></p>
					            </div>
					        </div> 
						<?php endforeach;?> 
					</div>
				</div>
	    	</div>
	     </div>   
</body>
</html>