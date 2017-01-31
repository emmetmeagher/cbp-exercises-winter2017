<?php 

for ($i=2; $i < 10; print 'foo') {
	echo $i;
	$i = $i + 1;
}
?>

<?php

$a = array();
for ($i = 0; $i < 10; $i++) {
	$a[$i] = 'value';
}

var_dump($a); 