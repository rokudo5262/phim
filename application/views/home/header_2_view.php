<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1><a class="navbar-brand" href="<?php echo base_url();?>Home/trangchu">Phim</a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <form class="form-inline my-2 my-lg-0" action="<?php echo base_url();?>Home/timkiem" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="timkiem">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
      </form>
      <a class="btn btn-outline-primary my-2 my-sm-0"> Xin Chào, <?php echo $this->session->userdata['username']?></a>
      <a class="btn btn-outline-primary my-2 my-sm-0"href="<?php echo base_url();?>Home/dangxuat">Đăng Xuất</a>
    </div>
  </nav>
  <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>Home/trangchu">Trang Chủ</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>Home/moinhat">Mới Nhất</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Home/phimle">Phim Lẻ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Home/phimbo">Phim Bộ</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Năm Phát Hành
      </a>
      <div class="dropdown-menu flex-wrap">
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2019">2019</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2018">2018</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2017">2017</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2016">2016</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2015">2015</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2014">2014</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2013">2013</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2012">2012</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2011">2011</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2010">2010</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2009">2009</button>
        </form>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheonam">
          <button class="dropdown-item" type="submit" name="year" value="2008">2008</button>
        </form>
     </div>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
        Quốc Gia
      </a>
      <div class="dropdown-menu">
        <?php foreach ($ds1 as $dm):?>
          <form method="post" action="<?php echo base_url();?>Home/timkiemtheoquocgia">
            <button class="dropdown-item" type="submit" name="nation" value="<?= $dm['TenQuocGia']?>">
              <?= $dm['TenQuocGia']?>              
            </button>
          </form>
      <?php endforeach;?>
      </div>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
        Thể Loại
      </a>
      <div class="dropdown-menu">
        <?php foreach ($ds2 as $dm):?>
        <form method="post" action="<?php echo base_url();?>Home/timkiemtheotheloai">
            <button class="dropdown-item" type="submit" name="type" value="<?= $dm['TenTheLoai']?>">
              <?= $dm['TenTheLoai']?>              
            </button>
          </form>
      <?php endforeach;?>
      </div>
    </li>
    </ul>
  </nav>
</body>
</html>
