<!doctype html>
<head>
  <meta charset="utf-8">
  <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<div class='inner'>
	
<?php 

	include "blog_posts.inc";
	//print_r($blog_posts);
	foreach($blog_posts as $content) {
	
	// Init some var
	
	$blog_title = $content->title;
	$blog_body = $content-> body;
	
	$html = "
		<div class =\"blogpost\">
			<h3> $blog_title </h3>
			<p> $blog_body </p>
		</div>
	
	";
		
		print $html;
	
		
		
	}


	
?>
</div>
	
</div>


  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>