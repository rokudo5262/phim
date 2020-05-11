<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
		{
			background: 
			repeating-linear-gradient(62deg, hsla(22,86%,60%, 0.58) 0px, hsla(22,86%,60%, 0.58) 124px,hsla(67,86%,60%, 0.58) 124px, hsla(67,86%,60%, 0.58) 189px,hsla(112,86%,60%, 0.58) 189px, hsla(112,86%,60%, 0.58) 252px,hsla(157,86%,60%, 0.58) 252px, hsla(157,86%,60%, 0.58) 305px,hsla(202,86%,60%, 0.58) 305px, hsla(202,86%,60%, 0.58) 365px,hsla(247,86%,60%, 0.58) 365px, hsla(247,86%,60%, 0.58) 483px,hsla(292,86%,60%, 0.58) 483px, hsla(292,86%,60%, 0.58) 609px,hsla(337,86%,60%, 0.58) 609px, hsla(337,86%,60%, 0.58) 738px),repeating-linear-gradient(326deg, hsla(39,68%,88%, 0.45) 0px, hsla(39,68%,88%, 0.45) 140px,hsla(90.42,68%,88%, 0.45) 140px, hsla(90.42,68%,88%, 0.45) 261px,hsla(141.85,68%,88%, 0.45) 261px, hsla(141.85,68%,88%, 0.45) 338px,hsla(193.28,68%,88%, 0.45) 338px, hsla(193.28,68%,88%, 0.45) 395px,hsla(244.71,68%,88%, 0.45) 395px, hsla(244.71,68%,88%, 0.45) 530px,hsla(296.14,68%,88%, 0.45) 530px, hsla(296.14,68%,88%, 0.45) 666px,hsla(347.57,68%,88%, 0.45) 666px, hsla(347.57,68%,88%, 0.45) 780px),repeating-linear-gradient(90deg, hsl(60,0%,9%),hsl(57,0%,15%),hsl(129,0%,51%),hsl(195,0%,26%),hsl(111,0%,80%) 7px);
		}
	</style>
	<link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>asset/bootstrap/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<header>
	<?php echo isset($header)? $header : "";  ?>
</header>
<content>
	<?php echo isset($body)?$body:""; ?>
</content>
	<?php echo isset($footer)? $footer : "";  ?>	
</body>
</html>