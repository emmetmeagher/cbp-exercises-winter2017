<?php 
$order = array(
       array(
       	'item' => 'macbook air',
       	'price' => '420420',	
       	),

        array(
        'item' => 'apple tv',
        'price' => '575',
       	),

        array(
          'item' => 'router',
          'price' =>'5435',
       	),

 
);
$total=0;
foreach ($order as $prod) {
	$total = $total + $prod['price'];
echo "buying" . $prod['item'] . "for" . $prod['price'] . "<br>";
}

echo $total;