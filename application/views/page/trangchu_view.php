<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
  h5
  {
     overflow: hidden;
    white-space: nowrap; 
    text-overflow: ellipsis;
  }
  img
  {
    width: 100%;
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
      <li class="breadcrumb-item active" >Trang chủ</li>
    </ol>
</nav>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <?php for($i=5;$i<count($banner);$i++){?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>"></li>
    <?php }?>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card-group">
           <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?php echo $banner[0]['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?php echo $banner[0]['HinhAnh']?>" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?php echo $banner[0]['TenPhim']?></h5>
            </div>
        </div>
           <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?php echo $banner[1]['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?php echo $banner[1]['HinhAnh']?>" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?php echo $banner[1]['TenPhim']?></h5>
            </div>
        </div>
           <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?php echo $banner[2]['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?php echo $banner[2]['HinhAnh']?>" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?php echo $banner[2]['TenPhim']?></h5>
            </div>
        </div>
           <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?php echo $banner[3]['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?php echo $banner[3]['HinhAnh']?>" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?php echo $banner[3]['TenPhim']?></h5>
            </div>
        </div>
           <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?php echo $banner[4]['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?php echo $banner[4]['HinhAnh']?>" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?php echo $banner[4]['TenPhim']?></h5>
            </div>
        </div>
        </div>
      </div>
      <?php for($i=1;$i<3;$i++){?>
      <div class="carousel-item">
        <div class="card-group">
        <?php for ($j = $i*5 ; $j < ($i*5+5); $j++){?>
           <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?= $banner[$j]['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?= $banner[$j]['HinhAnh']?>" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?= $banner[$j]['TenPhim']?></h5>
            </div>
        </div>
        <?php }?>
      </div>
      </div>
      <?php }?>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <br>
  <div class="container-fluid">
  <div class="row">
    <div class="col-10">
      <div class="card">
        <h4 class="card-header bg-info">Phim Mới Nhất</h4>
        <div class="card-body">
          <?php foreach ($phim as $dm):?>
          <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?= $dm['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?= $dm['HinhAnh']?>" id="img" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?= $dm['TenPhim']?></h5>
            </div>
          </div>
        <?php endforeach;?>
        </div>
        <div class="card-footer bg-info">
          <a href="<?php echo base_url();?>index.php/Home/moinhat">Xem Tất Cả</a>
        </div>
      </div>
      <br>
      <div class="card">
        <h4 class="card-header bg-info">Phim Bộ Mới Nhất</h4>
        <div class="card-body">
          <?php foreach ($phimbo as $dm):?>
          <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?= $dm['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?= $dm['HinhAnh']?>" id="img" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?= $dm['TenPhim']?></h5>
            </div>
          </div>
        <?php endforeach;?>
        </div>
        <div class="card-footer bg-info">
          <a href="<?php echo base_url();?>Home/phimbo">Xem Tất Cả</a>
        </div>
      </div>
      <br>
      <div class="card">
        <h4 class="card-header bg-info">Phim Lẻ Mới Nhất</h4>
        <div class="card-body">
          <?php foreach ($phimle as $dm):?>
          <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?= $dm['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?= $dm['HinhAnh']?>" id="img" class="card-img-top">
            </a>
            <div class="card-body">
              <h5 class="card-title"><?= $dm['TenPhim']?></h5>
            </div>
          </div>
        <?php endforeach;?>
        </div>
        <div class="card-footer bg-info">
          <a href="<?php echo base_url();?>Home/phimle">Xem Tất Cả</a></div>
      </div>
    </div>
    <div class="col-2">
      <div class="card">
        <h4 class="card-header bg-info">Trailer Mới Nhất</h4>
        <div class="card-body">
          <?php foreach ($trailer as $dm):?>
            <a href="<?php echo base_url();?>Home/chitiet/<?= $dm['MaPhim']?>">
              <img style="display: block;width: 50px; height: 50px;" src="<?php echo base_url();?>asset/image/<?= $dm['HinhAnh']?>" class="card-img-top">
            </a>
            <?php endforeach;?>
          </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
