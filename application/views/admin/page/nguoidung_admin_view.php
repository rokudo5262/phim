<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class="table" id="table">
	<thead>
			<tr>
				<th>Mã Người Dùng</th>
				<th>Họ Người Dùng</th>
				<th>Tên Người Dùng</th>
				<th>username</th>
				<th>password</th>
				<th>email</th>
				<th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
			</tr>
		</thead>
	<tbody>
		<?php foreach ($ds as $dm):?>
			<tr>				
				<td id="manguoidung"><?php echo $dm['MaNguoiDung']?></td>
				<td id="honguoidung"><?php echo $dm['HoNguoiDung']?></td>
				<td id="tennguoidung"><?php echo $dm['TenNguoiDung']?></td>
				<td id="username"><?php echo $dm['username']?></td>
				<td id="password"><?php echo $dm['password']?></td>
				<td id="email"><?php echo $dm['email']?></td>
				<td>
					<a class="btn btn-sm btn-danger" href="<?php  echo base_url();?>admin/xoanguoidung/<?php echo $dm['MaNguoiDung']?>">Xoá</a>
          <!-- <a data-toggle="modal" data_id="<?php echo $dm['MaNguoiDung']?>" class="open-update btn-sm btn-success" href="#update">Sửa</a> -->					
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $dm['MaNguoiDung']?> ">Sửa</button>
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
      <form action="<?php echo base_url();?>admin/themnguoidung" method="post">
      	<div class="modal-header">
          <h4 class="modal-title">Thêm Người Dùng</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>   
      	<div class="modal-body">
          <p> 
            <label>họ và tên đệm Người Dùng</label>
            <input type="text" name="honguoidung" class="form-control" required="" >
          </p>
          <p> 
            <label>tên Người Dùng</label>
            <input type="text" name="tennguoidung" class="form-control" required="" >
          </p>
          <p> 
            <label>địa chỉ email</label>
            <input type="email" name="email" class="form-control" required="" >
          </p>
          <p> 
            <label>Tài Khoản</label>
            <input type="text" name="username" class="form-control" required="" >
          </p>
          <p>
            <label>Mật Khẩu</label>
            <input type="password" name="password" class="form-control" required="" >
          </p>
          <p>
            <label>Mật Khẩu</label>
            <input type="password" name="password" class="form-control" required="">
          </p>
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
  <div class="modal" id="<?php echo $dm['MaNguoiDung']?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <form action="<?php echo base_url();?>admin/capnhatnguoidung/<?php echo $dm['MaNguoiDung']?>" method="post">
          <div class="modal-header">
            <h4 class="modal-title">Sửa Người Dùng</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>   
          <div class="modal-body">
            <p> 
              <label>Họ, Tên đệm Người Dùng</label>
              <input type="text" name="honguoidung" id="honguoidung" class="form-control" value="<?php echo $dm['HoNguoiDung']?>">
            </p>
            <p> 
              <label>tên Người Dùng</label>
              <input type="text" name="tennguoidung" class="form-control" value="<?php echo $dm['TenNguoiDung']?>">
            </p>
            <p> 
              <label>địa chỉ email</label>
              <input type="email" name="email" class="form-control" value="<?php echo $dm['email']?>">
            </p>
            <p> 
              <label>Tài Khoản</label>
              <input type="text" name="username" class="form-control" value="<?php echo $dm['username']?>">
            </p>
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
<script>
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
</body>
</html>