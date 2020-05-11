<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table class="table" id="table">
  <thead>
    <tr>
      <th>Mã Phim</th>
      <th>Tên Phim</th>
      <th>Poster</th>
      <th>Tóm Tắt</th>
      <th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ds as $dm):?>
  <tr>
        <td><?php echo $dm['MaPhim']?></td>        
        <td><?php echo $dm['TenPhim']?></td>
        <td><img src="<?php echo base_url();?>asset/image/<?= $dm['HinhAnh']?>" class="card-img-top"></td>
        <td><?php echo $dm['TomTat']?></td>
        <td>
          <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/xoaphim/<?php echo $dm['MaPhim']?>">Xoá</a>
        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?= $dm['MaPhim']?>">Sửa</button>
        </td>
      </tr>
    <?php endforeach;?>
  </tbody>
	
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?php echo base_url();?>admin/themphim" method="post"  enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm Phim</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        Tên Phim
        <input type="text" name="tenphim" required="" class="form-control">
        Poster
        <input type="file" name="image" id="image" class="form-control">
        Trailer
        <input type="text" name="trailer" required="" class="form-control">
        Năm Xuất Bản
        <input type="text" name="namxuatban" required="" class="form-control">
        Nhà Xuất Bản
        <input type="text" name="nhaxuatban" required="" class="form-control">
        Thời lượng
        <input type="text" name="thoiluong" required="" class="form-control">
        Tóm Tắt
        <input type="textarea" name="tomtat" class="form-control">
        <div class="form-group">
          <label for="trangthai">Trang Thái</label>          
          <select class="form-control" id="trangthai" name="trangthai">
              <option value="">Hoàn Thành</option>
              <option value="">Đang Tiến Hành</option>
          </select>    
        </div>
        <div class="form-group">
          <label for="phanloai">Phân Loại</label>          
          <select class="form-control" id="phanloai" name="phanloai">
            <?php foreach ($ds3 as $dm):?>
              <option value="<?php echo $dm['MaLoaiPhim']?>"><?php echo $dm['TenLoaiPhim']?></option>
            <?php endforeach;?>
          </select>    
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
		<button type="submit" class="btn btn-success">Thêm</button>
      </div>
 </form>
    </div>
  </div>
</div>
<?php foreach ($ds as $dm):?>
<div class="modal" id="<?= $dm['MaPhim']?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sửa Phim</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
    <button type="submit" class="btn btn-success">Lưu Thay Đổi</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
</body>
</html>