
<?php 

//Loop through numbers 2 to 1000
$start = microtime();
	for($i=2;$i<=1000;$i++) { 
		$prime=0;
		for($j=2;$j<=$i/2;$j++) 
//Check if the remainder is zero
		if(($i%$j)==0) { 
			$prime=1;  
		} 
		if($prime==0) 
		print "$i <br />";
	}
print "<br />";
$end = microtime();
$totalTime = $end-$start;

print "Took $totalTime seconds.";
			
