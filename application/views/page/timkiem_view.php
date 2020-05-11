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
      <li class="breadcrumb-item active" aria-current="page">Tìm Kiếm</li>
    </ol>
</nav>
<div class="card ">
        <h4 class="card-header bg-info">Tìm Kiếm</h4>
        <div class="card-body">
          
          <?php foreach ($phim as $dm):?>
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
      </div>
</body>
</html>