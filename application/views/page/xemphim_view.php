<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    video
    {
      display: block;
      margin: 0 auto;
    }
  </style>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item" ><a href="<?php echo base_url();?>Home/trangchu">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Xem Phim</li>
    </ol>
</nav>
<div class="card ">
        <h4 class="card-header bg-info">Xem Phim <?php echo $chitiet[0]['TenPhim']?></h4>
        <div class="card-body ">
        	<video width="auto" height="auto" controls class="justify-content-center" id="video1" controls>
				    <source src="<?php echo base_url();?>asset/video/<?php echo $chitiet[0]['Video']?>">
            Your browser does not support the video tag.
			   </video>
         <div style="text-align:center; padding: 1px;">
           <button class="btn btn-primary my-2 my-sm-0" onclick="playPause()">Play/Pause</button> 
            <button class="btn btn-primary my-2 my-sm-0" onclick="makeBig()">Phóng To</button>
            <button class="btn btn-primary my-2 my-sm-0" onclick="makeNormal()">Bình Thường</button>
            <button class="btn btn-primary my-2 my-sm-0" onclick="skip(-10)">Lùi 10 Giây</button> 
            <button class="btn btn-primary my-2 my-sm-0" onclick="skip(10)">Tiến 10 Giây</button>
         </div>
        </div>
        <div class="card-footer bg-info" style="text-align:center;">
          <?php foreach ($chitiet as $dm):?>
            <a class="btn btn-primary my-2 my-sm-0 <?php if($id2== $dm['MaTap']) echo 'active'; ?> " href="<?php echo base_url();?>Home/xemphim/<?= $dm['MaPhim']?>/<?= $dm['MaTap']?>"><?= $dm['SoTap']?></a> 
          <?php endforeach;?>
        </div>
      </div>
      <script type="text/javascript">
var myVideo = document.getElementById("video1"); 

function playPause() 
{ 
  if (myVideo.paused)
  { 
    myVideo.play();
  }
  else
  { 
    myVideo.pause();
  }
} 
function makeBig()
{ 
    myVideo.width = 960; 
} 
function makeNormal() 
{ 
    myVideo.width = 560; 
} 
function skip(value)
{
    var video = document.getElementById("video1");
    video.currentTime += value;
}    


</script> 
</body>
</html>