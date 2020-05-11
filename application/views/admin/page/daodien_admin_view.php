<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class="table" id="table">
	<thead>
			<tr>
				<th>Mã Đạo Diển</th>
				<th>Tên Đạo Diển</th>
				<th>Hình Ảnh</th>
				<th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
	Thêm
</button></th>
			</tr>
		</thead>
	<tbody>
		<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaDaoDien']?></td>
				<td><?php echo $dm['TenDaoDien']?></td>
				<td><img style="width: 100px;" src="<?php echo base_url();?>asset/image/director/<?php echo $dm['hinhanh_daodien']?>"></td>
				<td>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/xoadaodien/<?php echo $dm['MaDaoDien']?>">Xoá</a>					
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $dm['MaDaoDien']?>">Sửa</button>
				</td>
			</tr>
		<?php endforeach?>
	</tbody>
</table>
<!-- Button to Open the Modal -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      	<form method="post" action="<?php echo base_url();?>Admin/themdaodien" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Thêm Đạo Diển</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên đạo diển</p>
		      	<input type="text" name="tendaodien" class="form-control">
		      	<p>Hình ảnh</p>
		      	<input type="file" name="image">
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
	<div class="modal" id="<?php echo $dm['MaDaoDien']?>">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      	<form method="post" action="" enctype="multipart/form-data">
			      <div class="modal-header">
			        <h4 class="modal-title">Sửa Đạo Diển</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <!-- Modal body -->
			      <div class="modal-body">
			      	<p>Tên đạo diển</p>
			      	<input type="text" name="tendaodien" class="form-control" value="<?php echo $dm['TenDaoDien']?>">
			      	<p>Hình ảnh</p>
			      	<input type="file" name="image" ><img src="<?php echo base_url();?>asset/image/director/<?php echo $dm['hinhanh_daodien']?>">
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
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
</body>
</html>