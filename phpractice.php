<!doctype html>
<head>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1> Hello </h1>

<?php

//concatenation
/*$username = "Liz";
$ima = "sweet ass bitch";

print 'Liz is a '. $ima; */


//trying to make an array, indexed array
/*$highScore= array (200, 450, 50);
sort ($highScore);

foreach ($highScore as $score) {
	
	print "$score<br />";
}
*/

//associative arrays
/* $traits = array('hairy'=>'having a long furry pelt', 'curious'=>'pertaining to an exploratory nature, driven by wonderment', 'fish'=> 'a thing I wasted my money on and now it won\'t die');

foreach ($traits as $word => $description) {
	
	print "$word : $description <br /><br />";
}

//to get a value from the above array I can
print $traits['hairy']. "<br />"; 
*/

/*$newAnimals = array(
		(object) array(
			"head" => "Monkey",
			"body" => "Tiger",
		),
		(object) array(
			"head" => "Ostrich",
			"body" => "Camel",
		),
		(object) array(
			"head" => "Lion",
			"body" => "Dolphin",

		),
	);
	
	$newAnimals = (object) $newAnimals;
	//ask Ian what this line is doing
	//also ask ian about objects
$newAnimals = (object) $newAnimals;

foreach($newAnimals as $animal) {
	
	print '<h1>' . $animal->head ." ". $animal->body .'</h1>';
	
}

*/

//Init

$k=$n%$i;


for ($n=2; $n<10000; $n++)

{

$count=0;

for($i=2; $i<$n-1; $i++)

{




if ($k==0)

$count++;

}

if ($count==0)

echo "$n <br />";

}

?> 

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>