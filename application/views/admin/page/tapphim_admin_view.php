
<table class="table" id="table">
  <thead>
      <tr>
        <th>Mã Tập</th>
        <th>Tên Phim </th>
        <th>Tên Tập</th>
        <th>Video</th>
        <th>Số Tập</th>
        <th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
      </tr>
    </thead>
  <tbody>
    <?php foreach ($ds as $dm):?>
      <tr>
    <td><?php echo $dm['MaTap']?></td>
    <td><?php echo $dm['TenPhim']?></td>
    <td><?php echo $dm['TenTap']?></td>
    <td><?php echo $dm['Video']?></td>
    <td><?php echo $dm['SoTap']?></td>
    <td>
      <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/xoatapphim/<?php echo $dm['MaTap']?>">Xoá</a>            
          <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $dm['MaTap']?>">Sửa</button>
    </td>
  <?php endforeach;?>
</tr>
  </tbody>
</table>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <form action="<?php echo base_url();?>admin/themtapphim" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h4 class="modal-title"> Thêm Tập Phim</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label for="phim">Phim</label>          
            <select class="form-control" name="phim">
              <?php foreach ($ds2 as $dm):?>
                <option value="<?php echo $dm['MaPhim']?>"><?php echo $dm['TenPhim']?></option>
              <?php endforeach;?>
            </select>    
          </div>
          <div class="form-group">
            <label for="tentap">Tên Tập</label>          
            <input type="text" class="form-control" name="tentap">  
          </div> 
          <div class="form-group">
            <label for="sotap">Số Tập</label>          
            <input type="text" class="form-control" name="sotap" required="">  
          </div> 
          <div class="form-group">
            <label for="video">Video</label>          
            <input type="file" class="form-control" name="video" required="">  
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
 <script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>