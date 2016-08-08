<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/blogPage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<section class="container" id="blogPage">
		<div id="article-title">
			<h1>Title</h1>
		</div>
		<div id="article-img">
			<img src="img/blog.jpg" class="img-responsive">
		</div>
		<div id="article-desc">
			<p>
				<span>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper leo eget sapien ultrices vitae facilisis massa dictum. Fusce eu purus a urna accumsan luctus. Nullam sit amet nisi non ante ultrices egestas. Proin erat nulla, congue adipiscing accumsan id, sollicitudin eget dolor. Vestibulum ipsum urna, consequat vel cursus ut, scelerisque vel nisl. Suspendisse molestie facilisis dui, et rutrum enim fermentum id. Curabitur tincidunt tellus sed risus vulputate fringilla. Mauris luctus posuere odio, quis viverra purus consequat ac. Aliquam luctus posuere ultricies. Morbi sagittis elementum ligula, eget luctus diam facilisis sit amet. Maecenas fringilla cursus tortor, nec dictum purus volutpat et.
				</span>
				<span>
					Vivamus vel mi lorem. Sed vitae felis nisl, at venenatis tortor. In at velit ac turpis aliquam volutpat. Ut et nibh augue. Integer imperdiet convallis massa nec gravida. Sed eleifend porta urna. Praesent non nisi tellus, ut lobortis massa. Sed pretium pretium elit et vulputate. Quisque nec justo lacus. Phasellus tristique sapien ut dui sagittis feugiat. Pellentesque quis leo vitae magna vulputate ultrices quis vitae justo. Nulla vel imperdiet augue.
				</span>
				<span>
					Phasellus venenatis, est non sagittis pellentesque, mauris lectus mattis nisl, non vestibulum tortor tortor eu metus. Praesent ac ligula quis justo vestibulum lobortis vitae sit amet arcu. Aenean pellentesque aliquam dolor et consectetur. Mauris congue ornare purus, nec porttitor arcu blandit et. Ut pellentesque eros ac neque laoreet mattis tristique sit amet justo. Ut molestie orci lobortis nisl convallis volutpat. Pellentesque interdum sagittis tortor vitae tempus. Mauris imperdiet sapien non elit fermentum pulvinar. Vivamus sagittis egestas semper. Ut nibh neque, pharetra id ullamcorper in, suscipit ut ligula.
				</span>
			</p>
		</div>
		<div>
			<p class="pull-right article-info">
				<i class="fa fa-calendar" aria-hidden="true"></i><a href="">January 30, 2016</a>
				<i class="fa fa-user" aria-hidden="true"></i><a href="">Someone</a>
				<i class="fa fa-comments" aria-hidden="true"></i><a href="">10</a>
				<div class="clearfix"></div>
				<div class="pull-right" id="tags">
					<i class="fa fa-tags" aria-hidden="true"></i>
					<a href="">blog</a>
					<a href="">info</a>
					<a href="">article</a>
					<a href="">hashtag</a>
				</div>
				<div class="clearfix"></div>
			</p>
			<hr>
		</div>
		<div id="share">
			<p>
				SHARE
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
			</p>
		</div>
		<div id="comment-form">
			<form method="POST">
				<div class="form-group">
					<label for="name">NAME</label>
					<input type="text" name="name" id="name" required />
				</div>
				<div class="form-group">
					<label for="email">EMAIL</label>
					<input type="email" name="email" id="email" />
				</div>
				<div class="form-group">
					<label for="website">WEBSITE</label>
					<input type="text" name="website" id="website" />
				</div>
				<div class="form-group">
					<label for="name">COMMENT</label>
					<textarea rows="10"></textarea>
				</div>
				<button class="btn btn-info">POST COMMENT</button>
			</form>
		</div>

		<div class="scroll-top-wrapper ">
			<span class="scroll-top-inner">
				<i class="fa fa-2x fa-arrow-circle-up"></i>
			</span>
		</div>
			
	</section>

</body>
</html>