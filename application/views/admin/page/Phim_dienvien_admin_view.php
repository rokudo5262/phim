<table class="table" id="table">
  <thead>
      <tr>
        <th>Mã Phim</th>
        <th>Mã Diển Viên</th>
        <th>Thủ Vai</th>
        <th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
      </tr>
    </thead>
  <tbody>
    <?php foreach ($ds as $dm):?>
      <tr>
    <td><?php echo $dm['TenPhim']?></td>
    <td><?php echo $dm['TenDienVien']?></td>
    <td><?php echo $dm['ThuVai']?></td>
    <td>
      <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/xoaphim_daodien/<?php echo $dm['MaPhim']?>/<?php echo $dm['MaDienVien']?>">Xoá</a>            
          <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#">Sửa</button>
    </td>
  <?php endforeach;?>
</tr>
  </tbody>
</table>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?php echo base_url();?>admin/themphim_dienvien" method="post">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sửa Phim</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label for="loaiphim">Phim</label>          
          <select class="form-control" id="phim" name="phim">
            <?php foreach ($ds2 as $dm):?>
              <option value="<?php echo $dm['MaPhim']?>"><?php echo $dm['TenPhim']?></option>
            <?php endforeach;?>
          </select>    
        </div>
        <div class="form-group">
          <label for="dienvien">Diển Viên</label>          
          <select class="form-control" id="dienvien" name="dienvien">
            <?php foreach ($ds3 as $dm):?>
              <option value="<?php echo $dm['MaDienVien']?>"><?php echo $dm['TenDienVien']?></option>
            <?php endforeach;?>
          </select>    
        </div>
        <div class="form-group">
          <label for="dienvien">Thủ Vai</label>          
          <input type="text" class="form-control" id="dienvien" name="thuvai">  
        </div>
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
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->