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
      <li class="breadcrumb-item" ><a href="<?php echo base_url();?>Home/trangchu">Trang Chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Phim Bộ</li>
    </ol>
</nav>
<div class="card ">
        <h4 class="card-header bg-info">Phim bộ mới nhất</h4>
        <div class="card-body">
          <?php foreach ($phimbo as $dm):?>
          <div class="card" id="card">
            <a href="<?php echo base_url();?>Home/chitiet/<?= $dm['MaPhim']?>">
              <img src="<?php echo base_url();?>asset/image/<?= $dm['HinhAnh']?>" class="card-img-top">
            </a>
            <div class="card-body" >
              <h5 class="card-title"><?= $dm['TenPhim']?></h5>
            </div>
          </div>
        <?php endforeach;?>
        </div>
        <div class="card-footer bg-info" style="text-align: center;">
          <?php echo $pagination;?>
        </div>
      </div>
</body>
</html>