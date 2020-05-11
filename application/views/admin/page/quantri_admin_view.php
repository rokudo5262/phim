<div class="container-fluid">
	<table class="table" id="table">
		<thead>
				<tr>
					<th>Mã Admin</th>
					<th>Tên admin</th>
					<th>username</th>
					<th>password</th>
					<th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
				</tr>
			</thead>
		<tbody>
			<?php foreach ( $ds as $dm):?>
				<tr>				
					<td><?php echo $dm['MaAdmin']?></td>
					<td><?php echo $dm['TenAdmin']?></td>
					<td><?php echo $dm['username']?></td>
					<td><?php echo $dm['password']?></td>
					<td>
						<a class="btn btn-sm btn-danger " href="<?php echo base_url();?>admin/xoaquantri/<?php echo $dm['MaAdmin']?>">Xoá</a>
						<button class="btn btn-sm btn-success edit_data" data-toggle="modal" data-target="#<?php echo $dm['MaAdmin']?>">Sửa</button>
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
      	<form method="post" action="<?php echo base_url();?>Admin/themquantri" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Thêm Quản Trị</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên đầy đủ</p>
		      	<input type="text" class="form-control" name="tenquantri">
		      	<p>tài khoản</p>
		      	<input type="text" class="form-control" name="username">
		      	<p>mật khẩu</p>
		      	<input type="password" class="form-control" name="password">
		      	<p>nhập lại mật khẩu</p>
		      	<input type="password" class="form-control">
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
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php foreach ( $ds as $dm):?>
<div class="modal" id="<?php echo $dm['MaAdmin']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      	<form method="post" action="<?php echo base_url();?>admin/capnhatquantri/<?php echo $dm['MaAdmin']?>" enctype="multipart/form-data">
		      <div class="modal-header">
		        <h4 class="modal-title">Sửa Quản Trị</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		      	<p>Tên đầy đủ</p>
		      	<input type="text" class="form-control" name="tenquantri" id="tenquantri" value="<?php echo $dm['TenAdmin']?>">
		      	<p>tài khoản</p>
		      	<input type="text" class="form-control" name="username" id="username" value="<?php echo $dm['username']?>">
		      	<p>mật khẩu</p>
		      	<input type="password" class="form-control" name="password" id="password" value="<?php echo $dm['password']?>">
		      	<p>nhập lại mật khẩu</p>
		      	<input type="password" class="form-control" value="<?php echo $dm['password']?>">
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
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php endforeach?>
 <script>  
$(document).ready(function() {
    $('#table').DataTable();
});
 </script>