<!doctype html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
  
</head>
<body>

<div class="container">


	<div class="hero-unit">
		<h1>Your Final Destination</h1>
			<p>Will you live or die?</p>
			<p>
				<a class="btn btn-primary btn-large">
					<i class="icon-plus-sign icon-white"></i> Learn more
				</a>
			</p>
	</div>
	<div class="row">
		

		<?php 

<<<<<<< HEAD
		
=======
			// Include the blog posts from file
>>>>>>> 402c8ec30d21fbed7dfcd5aabe3620a59f2ebe22
			include "blog_posts.inc";

			// Loop through blog posts
			foreach($blog_posts as $content) {

				// If the blog post is published
				if (
					($content->published === TRUE || $content->published === "yes") &&
					$content->body !== ""
				) {

					// Init				
					$blog_title = $content->title;
					$blog_body = $content-> body;
					$blog_body_cut = substr( $blog_body, 0, 200);
	
					// Build HTML
					$html = "
						<div class =\"span6\">
							<div class=\"well\">
								<div class=\"page-header\">
									<h3> $blog_title </h3>
								</div>
								<p> $blog_body_cut </p>
							</div>
						</div>	
					";
	
					// Print HTML
					print $html;
					
					
				} elseif (
					($content->published === TRUE || $content->published === "yes") &&
					$content->body === ""
				) {
					
					// Build HTML
					$html = "
						<div class =\"span6\">
							<div class=\"well\">
								<div class=\"page-header\">
									<h3> $blog_title </h3>
								</div>
								<p> NO BODY </p>
							</div>
						</div>	
					";
	
					// Print HTML
					print $html;
					
				}


			}
		
		
		?>


		
	</div>	
</div>


  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>