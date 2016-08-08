<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/map.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div id="map">
	<h2>Our offices around the world</h2>
	<p>Members in 6 countries aways ready to help you at any time</p>
	<img src="img/world.jpg" alt="" id="map-img" />
	<div class="office-point" id="point1">
		<!-- USA -->
		<a href="#" data-toggle="tooltip" data-placement="top" title="<div class='members'><img src='img/usa.jpg' ><h4>USA</h4><p>24 members</p></div>"><img src="img/map-btn.png" ></a>
	</div>
	<div class="office-point" id="point2">
		<!-- Costa Rica -->
		<a href="#" data-toggle="tooltip" data-placement="top" title="<div class='members'><img src='img/rica.jpg' ><h4>Costa Rica</h4><p>8 members</p></div>"><img src="img/map-btn.png"></a>
	</div>
	<div class="office-point" id="point3">
		<!-- Hungary -->
		<a href="#" data-toggle="tooltip" data-placement="top" title="<div class='members'><img src='img/hungary.jpg' ><h4>Hungary</h4><p>10 members</p></div>"><img src="img/map-btn.png"></a>
	</div>
	<div class="office-point" id="point4">
		<!-- Kenya -->
		<a href="#" data-toggle="tooltip" data-placement="top" title="<div class='members'><img src='img/kenya.jpg' ><h4>Kenya</h4><p>2 members</p></div>"><img src="img/map-btn.png"></a>
	</div>
	<div class="office-point" id="point5">
		<!-- India -->
		<a href="#" data-toggle="tooltip" data-placement="top" title="<div class='members'><img src='img/india.jpg' ><h4>India</h4><p>4 members</p></div>"><img src="img/map-btn.png"></a>
	</div>
	<div class="office-point" id="point6">
		<!-- Australia -->
		<a href="#" data-toggle="tooltip" data-placement="top" title="<div class='members'><img src='img/australia.jpg' ><h4>Australia</h4><p>12 members</p></div>"><img src="img/map-btn.png"></a>
	</div>	
</div>


















<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({html:true});
});
</script>


</body>
</html>