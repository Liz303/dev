<!doctype html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
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

			//Include the blog posts from file
			include "blog_posts.inc";
			
			// Init
			$featured_html = '';

			//Loop through blog posts
			foreach($blog_posts as $content) {

				//If the blog post is published
				if (
					($content->published === TRUE || $content->published === "yes") &&
					$content->body !== ""
				) {

					// Init				
					$blog_title = $content->title;
					$blog_body = $content-> body;
					$blog_body_cut = substr( $blog_body, 0, 200);
					$img = $content->image_path;
					$featured = $content->featured;
					
					//Check if the content is featured
					if ( $featured === TRUE ){
						
						$featured_html = "
							<div class =\"span12\">
								<div class=\"well\">
									<div class=\"page-header\">
										<h3> $blog_title </h3>
									</div>
									<p> $blog_body_cut </p>
									<img src=\"$img\" />
								</div>
							</div>			
						";
					}
					
					// Build HTML
					$html .= "
					
						<div class =\"span6 img-wrap\">
							<img src=\"$img\" />
								<div class=\"title-body\">
									<div class=\"page-header\">
										<h3> $blog_title </h3>
										</div>
										<p> $blog_body_cut </p>
								</div>
							
						</div>	
					";
	
					
					
					
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
		
			// Print HTML
			print $featured_html . $html; 
		
		?>


		
	</div>	
</div>


  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>