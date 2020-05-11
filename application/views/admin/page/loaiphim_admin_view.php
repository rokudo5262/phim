<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class="table" id="table">
	<thead>
			<tr>
				<th>Mã Loại Phim</th>
				<th>Tên Loại Phim</th>
				<th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
			</tr>
		</thead>
	<tbody>
		<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaLoaiPhim']?></td>
				<td><?php echo $dm['TenLoaiPhim']?></td>
				<td>
					<a href="<?php echo base_url();?>admin/xoaloaiphim/<?php echo $dm['MaLoaiPhim']?>" class="btn btn-sm btn-danger">Xoá</a>
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $dm['MaLoaiPhim']?>">
						Sửa
					</button>
				</td>
			</tr>
		<?php endforeach?>
	</tbody>
</table>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      	<form method="post" action="<?php echo base_url();?>Admin/themloaiphim" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Thêm Loại Phim</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên Loại Phim</p>
		      	<input type="text" name="tenloaiphim">
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
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php foreach ($ds as $dm):?>
	<div class="modal" id="<?php echo $dm['MaLoaiPhim']?>">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      	<form method="post" action="<?php echo base_url();?>admin/capnhatloaiphim/<?php echo $dm['MaLoaiPhim']?>" enctype="multipart/form-data">
			      <div class="modal-header">
			        <h4 class="modal-title">Sửa Loại Phim</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <!-- Modal body -->
			      <div class="modal-body">
			      	<p>Tên Loại Phim</p>
			      	<input type="text" name="tenloaiphim" class="form-control" value="<?php echo $dm['TenLoaiPhim']?>">
			      </div>
			      <!-- Modal footer -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
					<button type="submit" class="btn btn-success">Lưu Thay Đổi</button>
			      </div>
	  		</form>
	    </div>
	  </div>
	</div>
<?php endforeach?>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
</body>
</html>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

