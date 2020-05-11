<table class="table" id="table">
  <thead>
      <tr>
        <th>Tên Phim</th>
        <th>Tên Quốc Gia</th>
        <th><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button></th>
      </tr>
    </thead>
  <tbody>
    <?php foreach ($ds as $dm):?>
      <tr>
    <td><?php echo $dm['TenPhim']?></td>
    <td><?php echo $dm['TenQuocGia']?></td>
    <td>
      <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>admin/xoaphim_daodien/<?php echo $dm['MaPhim']?>/<?php echo $dm['MaQuocGia']?>">Xoá</a>            
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
      <form method="post" action="<?php echo base_url();?>admin/themphim_quocgia">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Phim Quốc Gia</h4>
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
          <label for="quocgia">Quốc Gia</label>          
          <select class="form-control" id="quocgia" name="quocgia">
            <?php foreach ($ds3 as $dm):?>
              <option value="<?php echo $dm['MaQuocGia']?>"><?php echo $dm['TenQuocGia']?></option>
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
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
});
</script>