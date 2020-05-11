<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<table class="table" id="table">
	<thead>
			<tr>
				<th>Mã Quốc Gia</th>
				<th>Tên Quốc Gia</th>
				<th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
			</tr>
		</thead>
	<tbody>
		<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaQuocGia']?></td>
				<td><?php echo $dm['TenQuocGia']?></td>
				<td>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/xoaquocgia/<?php echo $dm['MaQuocGia']?>">Xoá</a>						
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $dm['MaQuocGia']?>">Sửa</button>
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
      	<form method="post" action="<?php echo base_url();?>admin/themquocgia/<?php echo $dm['MaQuocGia']?>" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Thêm Quốc Gia</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên Quốc Gia</p>
		      	<input type="text" name="tenquocgia" class="form-control">
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
	<div class="modal" id="<?php echo $dm['MaQuocGia']?>">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      	<form method="post" action="<?php echo base_url();?>admin/capnhatquocgia/<?php echo $dm['MaQuocGia']?>" enctype="multipart/form-data">
			      <div class="modal-header">
			        <h4 class="modal-title">Sửa Quốc Gia</h4>
			        <button type="button" class="close" data-dismiss="modal" value="<?php echo $dm['TenQuocGia']?>">&times;</button>
			      </div>
			      <!-- Modal body -->
			      <div class="modal-body">
			      	<p>Tên Quốc Gia</p>
			      	<input type="text" name="tenquocgia" class="form-control" value="<?php echo $dm['TenQuocGia']?>">
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
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php endforeach?>
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
</body>
</html>