<?php 
/* Check to see if number i is prime

*/

//Init
$start = time();

$number = 'number';

$limit = 26000;

	//Loop through numbers 2 to 1000.
	for($i=2;$i<=$limit;$i++) { 

		$number=0;
		
		for($j=2;$j<=$i/2;$j++) {
			
			//Check if the remainder is zero. 
			if( ($i%$j) === 0 ) { 

				$number=1;  

			} 
	
		}

		//If the remainder is zero the number is prime.
		if ( $number === 0 ) {

			//print "$i <br />";

		}

		if ( $i === $limit ) {

			$end = time();

		}
	
	}

print "<br />";

$total_time = $end-$start;

print "Took $total_time seconds.";
