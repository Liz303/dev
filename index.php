<!doctype html>
<head>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<div class='inner'>
	
<?php 

	include "blog_posts.inc";
	//print_r($blog_posts);
	foreach($blog_posts as $content) {
		
		print '<div class="blogpost">';
		print '<h3>' . $content->title . '</h3> ';
		print '<p> <blockquote>' . $content->body . '</p></blockquote>';
		print '</div>';
	
		
		
	}


	
?>
</div>
	
</div>


  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>