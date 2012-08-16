
<?php 

//Init
$start = microtime();
$end = microtime();
$number = 'number';

	//Loop through numbers 2 to 1000.
	for($i=2;$i<=1000;$i++) { 
		$number=0;
		
		for($j=2;$j<=$i/2;$j++) 
		
			//Check if the remainder is zero. 
			if(($i%$j)===0) { 
			$number=1;  
			} 
			//If the remainder is zero the number is prime.
			if($number===0) {
			print "$i <br />";
			}
		
	}

print "<br />";

$total_time = $end-$start;

print "Took $total_time seconds.";
			
