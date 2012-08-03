<!doctype html>
<head>
  <meta charset="utf-8">
</head>
<body>

<?php 

	$array = array(
		"Ian" => array(
			"Veggie" => "Carrot",
			"Fruit" => "Banana",
		),
		"Frank" => array(
			"Veggie" => "Celery",
			"Fruit" => "Squash",
		),
		"Liz" => array(
			"Veggie" => "Green Pepper",
			"Fruit" => "Kiwi",
		),
	);

	foreach($array as $person => $food) {

		print "<h1>$person likes the following:</h1>";
		
		// Loop through the person's favorite foods
		foreach($food as $type => $name) {

			print "<h2>$name</h2>";
			
		}

	}

?>

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>