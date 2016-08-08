<?php
	include 'header.php';
		$dbhost= 'localhost';
		$dbuser= 'root';
		$dbpass='';
		$dbname='it_custom';
		$conn= new mysqli($dbhost, $dbuser, $dbpass,$dbname);

		if (!$conn) {
			die('global error');
		}
?>

<section class="slider">
	    <div class="wrapper">
	      	<div class="slider-caption"> 
		        <h1>Web Development and</h1>
		        <h2>IT Support made easy</h2>
					<a href="#" class="img-slider">
						<img src="" alt="">
					</a>
			</div>
   		 </div>
  	</section>


<?php
	include 'footer.php';
?>

