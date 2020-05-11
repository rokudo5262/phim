<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table class="table" id="table">
	<thead>
			<tr>
				<th>Mã Thể Loại</th>
				<th>Tên Tên Thể Loại</th>
				<th>Mô Tả</th>
				<th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
			</tr>
		</thead>
	<tbody>
		<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaTheLoai']?></td>
				<td><?php echo $dm['TenTheLoai']?></td>
				<td><?php echo $dm['MoTa']?></td>
				<td>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Admin/xoatheloai/<?php echo $dm['MaTheLoai']?>">Xoá</a>
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $dm['MaTheLoai']?>">Sửa</button>
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
      	<form method="post" action="<?php echo base_url();?>Admin/themtheloai" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Thêm Quản Trị</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên thể loại</p>
		      	<input type="text" class="form-control" name="tentheloai">
		      	<p>mô tả</p>
		      	<textarea type="text" class="form-control" name="mota" value="<?php echo $dm['MoTa']?>"></textarea>
		      <!-- Modal footer -->
		      </div>
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
<div class="modal" id="<?php echo $dm['MaTheLoai']?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      	<form method="post" action="<?php echo base_url();?>Admin/capnhattheloai/<?php echo $dm['MaTheLoai']?>" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Thêm Quản Trị</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên thể loại</p>
		      	<input type="text" class="form-control" name="tentheloai" value="<?php echo $dm['TenTheLoai']?>">
		      	<p>mô tả</p>
		      	<textarea type="text" class="form-control" name="mota" value="<?php echo $dm['MoTa']?>"></textarea>
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