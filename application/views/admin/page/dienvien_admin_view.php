<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table class="table" id="table">
	<thead>
			<tr>
				<th>Mã Diển Viên</th>
				<th>Tên Diển Viên</th>
				<th>Hình Ảnh</th>
				<th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
			</tr>
		</thead>
	<tbody>
		<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaDienVien']?></td>
				<td><?php echo $dm['TenDienVien']?></td>
				<td><img style="width: 100px;" src="<?php echo base_url();?>asset/image/actor/<?php echo $dm['hinhanh_dienvien']?>"></td>
				<td>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/xoadienvien/<?php echo $dm['MaDienVien']?>">Xoá</a>					
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $dm['MaDienVien']?>">Sửa</button>
				</td>
			</tr>
		<?php endforeach?>
	</tbody>
</table>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      	<form method="post" action="<?php echo base_url();?>Admin/themdienvien" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Thêm Diển Viên</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên Diển Viên</p>
		      	<input type="text" name="tendienvien" class="form-control">
		      	<p>Hình ảnh</p>
		      	<input type="file" name="image" class="form-control">
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
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      	<form method="post" action="<?php echo base_url();?>Admin/themdienvien" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Sửa Diển Viên</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên Diển Viên</p>
		      	<input type="text" name="tendienvien" class="form-control">
		      	<p>Hình ảnh</p>
		      	<input type="file" name="image" class="form-control">
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
	<div class="modal" id="<?php echo $dm['MaDienVien']?>">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      	<form method="post" action="" enctype="multipart/form-data">
			      <div class="modal-header">
			        <h4 class="modal-title">Sửa Diển Viên</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <!-- Modal body -->
			      <div class="modal-body">
			      	<p>Tên Diển Viên</p>
			      	<input type="text" name="tendienvien" class="form-control" value="<?php echo $dm['TenDienVien']?>">
			      	<p>Hình ảnh</p>
			      	<input type="file" name="image" class="form-control" value="<?php echo base_url();?>asset/image/actor/<?php echo $dm['hinhanh_dienvien']?>">
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
<?php endforeach?>
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
</body>
</html>