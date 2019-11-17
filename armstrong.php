<?php 

$og_number = 370;
$numlength = strlen((string)$og_number);

$sum=0;
$number=$og_number;
for ($i=0; $i <$numlength ; $i++) { 
	$division = $number/10;
	$rem = $number%10;
	$sum = $sum+($rem*$rem*$rem);
	$number = $division;
}

if ($og_number == $sum) {
	echo "Armstrong number";
}
else {

	echo "Not Armstrong number";
}
?>